@extends('layouts.app')
@section('content')
@section('css')
    <style>
        .icon_resultado{
            width: 30px;
            height: 30px;
            text-align: center;
            border-radius: 100%;
        }
    </style>
@endsection
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Selección 375 microempresarios</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row w-100">
                                <div class="col-md-6">
                                    <h4>Listado de empresas encuestadas</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <form action="{{ route('diagnostico.index') }}" method="get">
                                        <div class="row">
                                            <div class="form-row">
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Buscar..."
                                                        name="buscar" value="{{ $busqueda }}" id="buscar">
                                                </div>
                                                <div class="col-auto">
                                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Nit</th>
                                            <th style="width: ">Razón social</th>
                                            <th>CIIU</th>
                                            <th>Municipio</th>
                                            <th>Fecha registro encuesta</th>
                                            <th>Resultado</th>
                                            <th>Acciones</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        @foreach ($empresas as $empresa)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $empresa->nit_empresa }}</td>
                                                <td>{{ $empresa->razon_social }}</td>
                                                <td>{{ $empresa->ciiu }}</td>
                                                <td>{{ $empresa->municipio}}</td>
                                                <td>{{ $empresa->fecha_registro_resultado }}</td>
                                                <td>
                                                    <p
                                                        class="icon_resultado @if ($empresa->total >= 0 and $empresa->total <= 40) bg-danger text-white @elseif($empresa->total > 40 and $empresa->total <= 70) bg-warning text-white @elseif($empresa->total > 70 and $empresa->total <= 100) bg-success text-white @endif">
                                                        {{ $empresa->total }}</p>
                                                </td>
                                                <td style="width: 10%">
                                                    <a class="btn btn-light"
                                                        href="/diagnostico/{{ $empresa->nit_empresa }}">Detalle</a>
                                                    <!--<a class="btn btn-primary" href="/diagnostico/{{ $empresa->nit_empresa }}/analisis" title="Análisis individual"><i class="fas fa-bezier-curve"></i></a>-->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {{ $empresas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
