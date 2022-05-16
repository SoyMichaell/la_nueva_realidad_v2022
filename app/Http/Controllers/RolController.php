<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permisos = DB::table('permisos')->get();
        return view('roles.crear', compact('permisos'));
    }

    public function store(Request $request)
    {
        $role = DB::table('roles')->insert(['nombre_rol' => $request->get('nombre_rol')]);
        $id = DB::getPdo()->lastInsertId();

        if ($role == 0) {
            foreach ($request->get('permisos_rol') as $rol) {
                DB::table('roles_permisos')->insert([
                    'id_rol' => $id,
                    'id_permiso' => $rol
                ]);
            }
            Alert::success('Exitoso', 'Rol creado con exito');
            return redirect('/rol');
        } else {
            Alert::warning('Advertencia');
            return redirect('/rol');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rol = Rol::find($id);
        $permisos = DB::table('permisos')->get();
        $has_rol_permiso = DB::table('roles_permisos')->where('id_rol', $id)->get();
        return view('roles.editar', compact('rol', 'permisos', 'has_rol_permiso'));
    }

    public function update(Request $request, $id)
    {

        $permisos = DB::table('roles_permisos')->where('id_rol', $id)->get();

        if (count($permisos) <= 0) {
            foreach ($request->get('permisos_rol') as $rol) {
                DB::table('roles_permisos')->insert([
                    'id_rol' => $id,
                    'id_permiso' => $rol
                ]);
            }
        } else {
            foreach ($request->get('permisos_rol') as $rol) {
                DB::table('roles_permisos')->where('id_rol', $id)->update([
                    'id_permiso' => $rol
                ]);
            }
        }
        Alert::success('Exitoso', 'El rol se ha actualizado');
        return redirect('/rol');
    }

    public function destroy($id)
    {
        DB::table('roles_permisos')->where('id_rol', $id)->delete();
        DB::table('roles')->where('id', $id)->delete();
        Alert::success('Exitoso', 'El rol se ha eliminado');
        return redirect('/rol');
    }
}
