<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('search'));

            $alumnos = User::where('name', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(10);

            return view('administradores.index', ['alumnos'=>$alumnos,'search'=>$query]);
        }


       /* $message = -1;
        $query = $request->get('search');
        if (!empty($query)) {
            $alumnos = User::where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(4);
            $message = count($alumnos);
        } else {
            $alumnos = User::where('fullacces', 'no')->paginate(4);
            $message = count($alumnos);
        }
        return view('administradores.index', compact('alumnos', 'message'));*/
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'matricula' => $data['matricula'],
            'fullacces' => 'yes'
        ]);
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
    public function update($request)
    {

        $cambio=User::where('id',$request)
        ->update(['password' =>Hash::make('alumno')]);

        return view('administradores.contra',compact('cambio'));
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
}