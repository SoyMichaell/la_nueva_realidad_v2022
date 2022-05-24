@extends('layouts.app')
@section('content')
@section('css')
    <style>
        .icon_resultado {
            width: 30px;
            height: 30px;
            text-align: center;
            border-radius: 100%;
        }

    </style>
@endsection
<section class="section">
    <div class="section-header">
        <h1 class="page__heading">Selección 35 microempresarios</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row w-100">
                            <div class="col-md-6">
                                <h4>Listado de empresas</h4>
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
                            <table class="table table-bordered table-striped" id="table-1">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Nit</th>
                                        <th style="width: ">Razón social</th>
                                        <th>Municipio</th>
                                        <th>Instructor asignado</th>
                                        <th>Puntaje</th>
                                        <th>----</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $empresa->nit }}</td>
                                            <td>{{ $empresa->razon_social }}</td>
                                            <td>{{ $empresa->municipio }}</td>
                                            <td>
                                                <p
                                                    class="{{ $empresa->nombre == '' ? 'badge badge-warning' : 'badge badge-primary' }}">
                                                    {{ $empresa->nombre == '' ? 'Sin asignar' : $empresa->nombre . ' ' . $empresa->apellido }}
                                                </p>
                                            </td>
                                            <td>
                                                <p
                                                    class="icon_resultado @if ($empresa->total >= 0 and $empresa->total <= 40) bg-danger text-white @elseif($empresa->total > 40 and $empresa->total <= 70) bg-warning text-white @elseif($empresa->total > 70 and $empresa->total <= 100) bg-success text-white @endif">
                                                    {{ $empresa->total }}</p>
                                            </td>
                                            <td style="width: 10%">
                                                @foreach ($permisos as $permiso)
                                                    @if ($permiso->id_permiso == 'completar-analisis')
                                                        <a class="btn btn-light"
                                                            href="/diagnostico/{{ $empresa->nit }}/analisis"
                                                            title="Análisis individual">Completar</a>
                                                    @endif
                                                @endforeach
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
