@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Empresas</h4>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Table</h2>
                    <p class="section-lead">Listado de empresas</p>
                </div>
                <div class="col-md-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-primary create-user">
                        <i class="fa fa-plus-circle"></i> Nuevo</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row w-100">
                                <div class="col-md-6">
                                    <h4>Listado de empresas registrados</h4>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <form action="{{route('empresa.index')}}" method="get">
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
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Nit</th>
                                            <th>Razón social</th>
                                            <th>Correo electronico</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                            <th>Municipio</th>
                                            <th>Estado</th>
                                            <th>--</th>
                                        </tr>
                                        @foreach ($empresas as $empresa)
                                            <tr>
                                                <td>{{ $empresa->id }}</td>
                                                <td>{{ $empresa->nit }}</td>
                                                <td>{{ Str::ucfirst($empresa->razon_social) }}</td>
                                                <td>{{ $empresa->correo }}</td>
                                                <td>{{ $empresa->telefono1 }}</td>
                                                <td style="width: 10%">{{ $empresa->direccion }}</td>
                                                <td>{{ $empresa->municipio }}</td>
                                                <td><p class="{{$empresa->estado == 'seleccionado' ? 'badge bg-success text-white' : 'badge bg-danger text-white'}}">{{ $empresa->estado}}</p></td>
                                                <td>
                                                    <form action="{{ url("empresa/{$empresa->id}") }}" method="post">
                                                        <a class="btn btn-info" href="#"><i
                                                                class="fas fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {{$empresas->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
