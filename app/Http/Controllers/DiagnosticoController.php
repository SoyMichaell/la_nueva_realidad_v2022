<?php

namespace App\Http\Controllers;

use App\Models\ResultadoEncuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosticoController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = trim($request->get('buscar'));
        $empresas = DB::table('resultados')
            ->where('nit_empresa','LIKE','%'.$busqueda.'%')
            ->orWhere('ciiu','LIKE','%'.$busqueda.'%')
            ->paginate(20);
        return view('diagnostico.index', compact('empresas','busqueda'));
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
        $empresa = DB::table('resultados')
            ->join('empresas','resultados.nit_empresa','=','empresas.nit')
            ->where('nit_empresa', $id)
            ->first();
        return view('diagnostico.empresa', compact('empresa'));
    }

    public function analisis($id){
        $empresa = DB::table('empresas')
            ->where('nit', $id)
            ->first();
        return view('diagnostico.analisis', compact('empresa'));
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
