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
                                    <td>{{ $empresa->nit }}</td>
                                </tr>
                                <tr>
                                    <th>Razón social</th>
                                    <td>{{ $empresa->razon_social }}</td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td>{{ $empresa->telefono1 }}</td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td>{{ $empresa->direccion }}</td>
                                </tr>
                                <tr>
                                    <th>Municipio</th>
                                    <td>{{ $empresa->municipio }}</td>
                                </tr>
                                <tr>
                                    <th>CIIU Principal</th>
                                    <td>{{ $empresa->ciiu_1 }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">Puntaje aplicación encuesta</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>COMPONENTE</th>
                                        <th>PORCENTAJE</th>
                                        <th>MÁXIMO</th>
                                    </tr>
                                    <tr>
                                        <td>Perspectiva de crecimiento y desarrollo</td>
                                        <td
                                            class="@if ($empresa->perspectiva_c_d >= 0 and $empresa->perspectiva_c_d <= 7) bg-danger text-white 
                                            @elseif($empresa->perspectiva_c_d > 7 and $empresa->perspectiva_c_d <= 16) bg-warning text-white 
                                            @elseif($empresa->perspectiva_c_d > 16 and $empresa->perspectiva_c_d <= 25) bg-success text-white @endif">
                                            {{ $empresa->perspectiva_c_d . '%' }}</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>Perspectiva de clientes</td>
                                        <td
                                            class="@if ($empresa->perspectiva_c >= 0 and $empresa->perspectiva_c <= 7) bg-danger text-white 
                                            @elseif($empresa->perspectiva_c > 7 and $empresa->perspectiva_c <= 16) bg-warning text-white 
                                            @elseif($empresa->perspectiva_c > 16 and $empresa->perspectiva_c <= 25) bg-success text-white @endif">
                                            {{ $empresa->perspectiva_c . '%' }}</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>Perspectiva procesos internos</td>
                                        <td
                                            class="@if ($empresa->perspectiva_p_i >= 0 and $empresa->perspectiva_p_i <= 7) bg-danger text-white 
                                            @elseif($empresa->perspectiva_p_i > 7 and $empresa->perspectiva_p_i <= 16) bg-warning text-white 
                                            @elseif($empresa->perspectiva_p_i > 16 and $empresa->perspectiva_p_i <= 25) bg-success text-white @endif">
                                            {{ $empresa->perspectiva_p_i . '%' }}</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>Perspectiva financiera</td>
                                        <td
                                            class="@if ($empresa->perspectiva_f >= 0 and $empresa->perspectiva_f <= 7) bg-danger text-white 
                                                    @elseif($empresa->perspectiva_f > 7 and $empresa->perspectiva_f <= 16) bg-warning text-white 
                                                    @elseif($empresa->perspectiva_f > 16 and $empresa->perspectiva_f <= 25) bg-success text-white @endif">
                                            {{ $empresa->perspectiva_f . '%' }}</td>
                                        <td>25%</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td
                                            class="@if ($empresa->total >= 0 and $empresa->total <= 40) bg-danger text-white @elseif($empresa->total > 40 and $empresa->total <= 70) bg-warning text-white @elseif($empresa->total > 70 and $empresa->total <= 100) bg-success text-white @endif">
                                            {{ $empresa->total . '%' }}</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
