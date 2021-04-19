<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\ControlMateria;
use Illuminate\Support\Facades\Auth;

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
        $materias = ControlMateria::join('materias', 'control_materias.materia_id', '=', 'materias.materia_id')->select('*')->where('control_materias.alumno_id', $alumno_id)->paginate(10);

        return view('alumnos.index')->with('materias', $materias)->with('alumnoId', $alumno_id);
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

        return view('alumnos.show')->with('alumno', $alumno);
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
        $data = request()->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'semestre' => 'required',
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
            'telefono' => $data['telefono'],
            'semestre' => $data['semestre']
        ]);

        return redirect()->route('alumno.show', ['alumno' => Auth::user()->id])->with(['message' => 'Tu informacion se ha actualizado correctamente']);;
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
}