<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = trim($request->get('buscar'));
        $empresas = DB::table('empresas')
            ->where('nit', 'LIKE','%'.$busqueda.'%')
            ->orWhere('razon_social', 'LIKE','%'.$busqueda.'%')
            ->orWhere('correo', 'LIKE','%'.$busqueda.'%')
            ->orWhere('telefono1', 'LIKE','%'.$busqueda.'%')
            ->orWhere('direccion', 'LIKE','%'.$busqueda.'%')
            ->orWhere('municipio', 'LIKE','%'.$busqueda.'%')
            ->orderBy('id','asc')
            ->orderBy('razon_social','asc')
            ->paginate(20);
        return view('empresas.index', compact('empresas','busqueda'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        //
    }
}
