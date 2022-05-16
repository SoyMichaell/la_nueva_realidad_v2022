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
            ->where('nit_empresa', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('ciiu', 'LIKE', '%' . $busqueda . '%')
            ->paginate(20);
        return view('diagnostico.index', compact('empresas', 'busqueda'));
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
        $rules = ['mision' => 'required'];
        $message = ['mision.required' => 'El campo misión es requerido'];
        $this->validate($request, $rules, $message);

        $mision = DB::table('diagnostico_individual')->where('nit_empresa', $id)->update(['mision' => $request->get('mision')]);
        if ($mision == 1) {
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
        return view('diagnostico.empresa', compact('empresa'));
    }

    public function analisis($id)
    {
        $empresa = DB::table('empresas')
            ->where('nit', $id)
            ->first();
        $usuarios = User::all();
        $exist_diagnostico_empresa = DB::table('diagnostico_individual')->where('nit_empresa', $id)->first();
        return view('diagnostico.analisis', compact('empresa', 'usuarios', 'exist_diagnostico_empresa'));
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
