<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    public function index()
    {
        return view('grafico.index');
    }

    public function charts(){
        $empresas = DB::table('empresas')
            ->select('municipio', 
                DB::raw('count(*) total'), 
                DB::raw("ROUND((COUNT(*) / (SELECT COUNT(*) FROM empresas) * 100),2) as porcentaje"))
            ->groupBy('municipio')
            ->orderBy('total','desc')
            ->get();
        return response()->json($empresas);
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
