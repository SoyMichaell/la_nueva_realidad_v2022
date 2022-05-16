<?php

namespace App\Http\Controllers;

use App\Models\ResultadoEncuesta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DiagnosticoController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = trim($request->get('buscar'));
        $empresas = DB::table('resultados')
            ->join('empresas', 'resultados.nit_empresa', '=', 'empresas.nit')
            ->where('estado', '=', 'seleccionado')
            ->where('nit_empresa', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('estado', '=', 'seleccionado')
            ->where('razon_social', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('estado', '=', 'seleccionado')
            ->where('ciiu', 'LIKE', '%' . $busqueda . '%')
            ->paginate(20);
        return view('diagnostico/faseI.index', compact('empresas', 'busqueda'));
    }

    public function analisis_individual(Request $request)
    {
        $busqueda = trim($request->get('buscar'));
        $empresas = DB::table('resultados')
            ->join('empresas', 'resultados.nit_empresa', '=', 'empresas.nit')
            ->where('estado_35', '=', 'seleccionado')
            ->where('nit_empresa', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('estado_35', '=', 'seleccionado')
            ->where('razon_social', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('estado_35', '=', 'seleccionado')
            ->where('ciiu', 'LIKE', '%' . $busqueda . '%')
            ->paginate(20);
        return view('diagnostico/faseII.index', compact('empresas', 'busqueda'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $DiagnosticoIndividual = DB::table('diagnostico_individual')->where('nit_empresa', $request->get('nit_empresa'))->get();

        if (count($DiagnosticoIndividual) >= 1) {
            $updateDiagnostico = DB::table('diagnostico_individual')->where('nit_empresa', $request->get('nit_empresa'))
                ->update([
                    'id_persona' => $request->get('id_persona')
                ]);
        } else {
            $insertDiagnostico = DB::table('diagnostico_individual')->insert([
                'nit_empresa' => $request->get('nit_empresa'),
                'id_persona' => $request->get('id_persona')
            ]);
        }
        if ($insertDiagnostico == 1 || $updateDiagnostico == 1) {
            Alert::success('Exitoso', 'Asignación registrada');
            return back();
        } else {
            Alert::success('Advertencia', 'No se pudo');
            return back();
        }
    }

    public function mision(Request $request, $id)
    {
        $mision = DB::table('diagnostico_individual')->where('nit_empresa', $id)->update(['mision' => $request->get('mision')]);

        if ($mision == 1) {
            Alert::success('Exitoso', 'La información se ha guardado');
            return back();
        } else {
            Alert::warning('Advertencia', 'No se pudo');
            return back();
        }
    }

    public function vision(Request $request, $id)
    {
        $vision = DB::table('diagnostico_individual')->where('nit_empresa', $id)->update(['vision' => $request->get('vision')]);

        if ($vision == 1) {
            Alert::success('Exitoso', 'La información se ha guardado');
            return back();
        } else {
            Alert::warning('Advertencia', 'No se pudo');
            return back();
        }
    }

    public function objestrategico(Request $request, $id)
    {
        $objestrategico = DB::table('diagnostico_individual')->where('nit_empresa', $id)->update(['objetivo_estrategio' => $request->get('objestrategico')]);

        if ($objestrategico == 1) {
            Alert::success('Exitoso', 'La información se ha guardado');
            return back();
        } else {
            Alert::warning('Advertencia', 'No se pudo');
            return back();
        }
    }

    public function perspectivacrecimientodesarrollo(Request $request, $id){
        $perspectivacrecimientod = DB::table('diagnostico_individual')->where('nit_empresa', $id)
            ->update([
                'preguntacd1' => $request->get('preguntacd1'),
                'preguntacd1_1' => $request->get('preguntacd1_1'),
                'preguntacd2' => $request->get('preguntacd2'),
                'preguntacd3' => $request->get('preguntacd3'),
                'preguntacd4' => $request->get('preguntacd4'),
                'preguntacd5' => $request->get('preguntacd5'),
                'preguntacd5_1' => $request->get('preguntacd5_1'),
                'preguntacd6' => $request->get('preguntacd6'),
                'preguntacd7' => $request->get('preguntacd7'),
                'preguntacd8' => $request->get('preguntacd8'),
                'preguntacd9' => $request->get('preguntacd9'),
                'preguntacd10' => $request->get('preguntacd10'),
                'preguntacd11' => $request->get('preguntacd11'),
                'preguntacd12' => $request->get('preguntacd12'),
                'preguntacd13' => $request->get('preguntacd13'),
                'preguntacd14' => $request->get('preguntacd14'),
                'preguntacd15' => $request->get('preguntacd15'),
                'preguntacd16' => $request->get('preguntacd16'),
                'preguntacd17' => $request->get('preguntacd17'),
                'preguntacd17_1' => $request->get('preguntacd17_1'),
            ]);

            if ($perspectivacrecimientod == 1) {
                Alert::success('Exitoso', 'La información se ha guardado');
                return back();
            } else {
                Alert::warning('Advertencia', 'No se pudo');
                return back();
            }
    }

    public function show($id)
    {
        $empresa = DB::table('resultados')
            ->join('empresas', 'resultados.nit_empresa', '=', 'empresas.nit')
            ->where('nit_empresa', $id)
            ->first();
        return view('diagnostico/faseI.empresa', compact('empresa'));
    }

    public function analisis($id)
    {
        $empresa = DB::table('empresas')
            ->where('nit', $id)
            ->first();
        $usuarios = User::all();
        $exist_diagnostico_empresa = DB::table('diagnostico_individual')->where('nit_empresa', $id)->first();
        return view('diagnostico/faseII.analisis', compact('empresa', 'usuarios', 'exist_diagnostico_empresa'));
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
        $DiagnosticoIndividual = DB::table('diagnostico_individual')->where('nit_empresa', $id)->delete();
        if ($DiagnosticoIndividual == 1) {
            Alert::success('Exitoso', 'El diagnostico se ha eliminado');
            return back();
        } else {
            Alert::success('Advertencia', 'No se pudo');
            return back();
        }
    }
}
