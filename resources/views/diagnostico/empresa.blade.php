@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Diagnostico global</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="card card-primary">
                    <div class="card-header">Información empresa</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nit</th>
                                    <td>{{$empresa->nit}}</td>
                                </tr>
                                <tr>
                                    <th>Razón social</th>
                                    <td>{{$empresa->razon_social}}</td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td>{{$empresa->telefono1}}</td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td>{{$empresa->direccion}}</td>
                                </tr>
                                <tr>
                                    <th>Municipio</th>
                                    <td>{{$empresa->municipio}}</td>
                                </tr>
                                <tr>
                                    <th>CIIU Principal</th>
                                    <td>{{$empresa->ciiu_1}}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">Resultado de encuesta</div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr class="bg-primary text-white">
                                    <th>Perspectiva de estudio</th>
                                    <th>Porcentaje obtenido</th>
                                    <th>Total de perspectiva</th>
                                </tr>
                                <tr>
                                    <th>Perspectiva de crecimiento y desarrollo</th>
                                    <td>{{$empresa->perspectiva_c_d.'%'}}</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <th>Perspectiva de clientes</th>
                                    <td>{{$empresa->perspectiva_c.'%'}}</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <th>Perspectiva procesos internos</th>
                                    <td>{{$empresa->perspectiva_p_i.'%'}}</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <th>Perspectiva financiera</th>
                                    <td>{{$empresa->perspectiva_f.'%'}}</td>
                                    <td>25%</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>{{$empresa->total.'%'}}</td>
                                    <td>100%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">Respuesta a la encuesta</div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
