<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = DB::table('users')
            ->select('users.id as idUser','tipo_documento','numero_documento','nombre','apellido','email','telefono','rol','estado','nombre_rol','roles.id as idRol')
            ->join('roles','users.rol','=','roles.id')
            ->get();
        $roles = DB::table('roles')->get();
        return view('usuarios.index')
            ->with('usuarios', $usuarios)
            ->with('roles', $roles);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->password == $request->password_confirmation){
            DB::table('users')->insert(
                [
                    'tipo_documento' => $request->tipo_documento,
                    'numero_documento' => $request->numero_documento,
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'email' => $request->email,
                    'correo_institucional' => $request->correo_institucional,
                    'password' => Hash::make($request->password),
                    'telefono' => $request->telefono,
                    'nivel_programa' => $request->nivel_programa,
                    'programa' => $request->programa,
                    'estado' => $request->estado,
                    'rol' => $request->rol,
                ]
            );
            Alert::success('Exitoso', 'La información se ha registrado con exito');
            return redirect('/usuario');
        }else{
            return view('usuarios.index');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        Alert::success('Exitoso', 'El registro se ha eliminado');
        return redirect('/usuario');
    }
}
