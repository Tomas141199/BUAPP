<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as AuthUser;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = User::where('fullacces', 'no')->get();
        return view('administradores.index', compact('alumnos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cambio = User::where('id', $request['alumno'])
            ->update(['password' => Hash::make('alumno')]);

        $query = $request->get('search');
        if (!empty($query)) {
            $alumnos = User::where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(4);
            $message = count($alumnos);
        } else {
            $alumnos = User::where('fullacces', 'no')->get();
            $message = count($alumnos);
        }

        return redirect()->route('administrador.index')->with('alumno', $alumnos)->with(['message' => 'Tu informacion se ha actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        //
    }

    public function ajaxRequest(Request $request)
    {
        $input = $request->name;
        $alumnos = User::select('name')->where('name', 'LIKE', '%' . $input . '%')
            ->orderBy('id', 'asc')
            ->get();
        return json_encode($alumnos);
    }

    public function ajaxRequestUpdate(Request $request){
        
        $cambio = User::where('matricula', $request->id)
        ->update(['password' => Hash::make($request->id)]);

        return "La contrasena del alumno con id $request->id fue actualizada correctamente";
    }
}