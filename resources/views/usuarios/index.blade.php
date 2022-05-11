@extends('layouts.app')

@section('content')
    @include('usuarios.crear')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Usuarios</h4>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="section-title">Table</h2>
                    <p class="section-lead">Listado de usuarios vinculados al proyecto la nueva realidad</p>
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
                            <h4>Listado de usuarios registrados</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Tipo documento</th>
                                            <th>Nro. documento</th>
                                            <th>Nombre (s)</th>
                                            <th>Apellido (s)</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>--</th>
                                        </tr>
                                        <?php $i=1; ?>
                                        @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$usuario->tipo_documento}}</td>
                                                <td>{{$usuario->numero_documento}}</td>
                                                <td>{{Str::ucfirst($usuario->nombre)}}</td>
                                                <td>{{Str::ucfirst($usuario->apellido)}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->telefono}}</td>
                                                <td><p class="badge bg-info text-white">{{$usuario->nombre_rol}}</p></td>
                                                <td><p class="badge {{$usuario->estado == 'activo' ? 'bg-success' : 'bg-danger'}} text-white">{{$usuario->estado}}</p></td>
                                                <td>
                                                    <form action="{{url("usuario/{$usuario->idUser}")}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                        <!--<a class="edit-user btn btn-info" data-id="{{$usuario->idUser}}"><i class="fas fa-edit"></i></a>-->
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
