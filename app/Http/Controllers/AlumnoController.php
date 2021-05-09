<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;
use App\Models\ControlMateria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumno_id = Auth::user()->id;
        $materias = ControlMateria::join('materias', 'control_materias.materia_id', '=', 'materias.materia_id')
            ->select('*')
            ->where('control_materias.alumno_id', $alumno_id)
            ->where('control_materias.estado', '=', 'En curso')
            ->paginate(10);

        $materias2 = ControlMateria::join('materias', 'control_materias.materia_id', '=', 'materias.materia_id')
            ->select('*')
            ->where('control_materias.alumno_id', $alumno_id)
            ->where('control_materias.estado', '=', 'finalizado')
            ->paginate(10);

            

        return view('alumnos.index')->with('materias', $materias)->with('materias2', $materias2)->with('alumnoId', $alumno_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */

    public function show(Alumno $alumno)
    {

        $creditos = ControlMateria::join('materias', 'control_materias.materia_id', '=', 'materias.materia_id')
        ->where('control_materias.alumno_id', $alumno->id)
        ->where('control_materias.estado', '=', 'Finalizado')
        ->sum('creditos');
        $promedio= round(($creditos/284)*100,2);

        $matricula = intval(substr($alumno->usuario->matricula,0,4));

        $semestre = calcularsemestre($matricula);

        return view('alumnos.show')->with('alumno', $alumno)->with('promedio',$promedio)->with('semestre',$semestre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {

        if(isset($request['password']))
        {
            $pas = request()->validate([
                'password' => 'required'
            ]);
    
            auth()->user()->update(['password' => Hash::make($pas['password'])]);

        }

        $data = request()->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'matricula' => 'required',
        ]);

        auth()->user()->name = $data['nombre'];
        auth()->user()->email = $data['correo'];
        auth()->user()->matricula = $data['matricula'];

        auth()->user()->save();

        unset($data['nombre']);
        unset($data['correo']);
        unset($data['matricula']);

        auth()->user()->alumno()->update([
            'telefono' => $data['telefono']
            
        ]);

        return redirect()->route('alumno.show', ['alumno' => Auth::user()->id])->with(['message' => 'Tu informacion se ha actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }

    public function proyeccion(Alumno $alumno)
    {

        $ambas = ControlMateria::select('control_materias.materia_id')
            ->where('control_materias.alumno_id', $alumno->id)->where('control_materias.estado', '!=', 'Pendiente')->get();

        $enCurso = ControlMateria::join('materias', 'control_materias.materia_id', '=', 'materias.materia_id')
            ->select('materias.materia_id', 'control_materias.estado', 'materias.semestre')
            ->where('control_materias.alumno_id', $alumno->id)->where('control_materias.estado', 'En curso')->get();

        foreach ($enCurso as $mat) {
            $sigSem = Materia::select('nombre', 'materia_id', 'semestre')->where('semestre', $mat->semestre + 1)->get();
        }

        $fCol = new Collection();
        foreach ($sigSem as $sigMat) {
            $items = DB::select(DB::raw('SELECT id, materia_id, prerequisito FROM prerequisitos WHERE materia_id = "' . $sigMat->materia_id . '"'));
            foreach ($items as $item) {
                $fCol->push($item);
            }
        }

        $listM = new  Collection();
        foreach ($fCol  as $key => $element) {
            foreach ($ambas as $todas) {
                if ($todas->materia_id == $element->prerequisito) {
                    $listM->push($element->materia_id);
                }
            }
        }

        $proyeccion = new Collection();
        foreach ($listM as $key => $element) {
            $materia = Materia::where('materia_id', $element)->get();
            $proyeccion->push($materia);
        }

        return view('alumnos.proyeccion', compact('proyeccion'));
    }

        
}

function calcularsemestre ($anio)
{
    $mes= date("n");
    if($mes > 7 || ($anio == date('Y')))
    {
        $semestre= ((date("Y") - $anio)*2)+1;
    }
    else
    $semestre= (date("Y") - $anio)*2;

    return $semestre;
}