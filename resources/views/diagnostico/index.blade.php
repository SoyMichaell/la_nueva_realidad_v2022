@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Resultados encuesta</h1>
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
                                                        name="buscar" value="{{$busqueda}}" id="buscar">
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
                                <table class="table table-bordered table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Nit</th>
                                            <th>CIIU</th>
                                            <th>Fecha registro encuesta</th>
                                            <th>--</th>
                                        </tr>
                                        @foreach ($empresas as $empresa)
                                            <tr>
                                                <td>{{$empresa->id}}</td>
                                                <td>{{$empresa->nit_empresa}}</td>
                                                <td>{{$empresa->ciiu}}</td>
                                                <td>{{$empresa->fecha_registro_resultado}}</td>
                                                <td style="width: 10%">
                                                    <a class="btn btn-info" href="/diagnostico/{{$empresa->nit_empresa}}"><i class="fas fa-eye"></i></a>
                                                    <a class="btn btn-primary" href="/diagnostico/{{$empresa->nit_empresa}}/analisis" title="Análisis individual"><i class="fas fa-bezier-curve"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                {{$empresas->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
