@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Usuarios</h1>
        </div>
        <div class="section-body">
            <div class="col-md-12">
                <h2 class="section-title">Tabla usuarios</h2>
                <p class="section-lead">Listado de usuarios vinculados al proyecto la nueva realidad</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row w-100">
                                @foreach ($permisos as $permiso)
                                    @if ($permiso->id_permiso == 'crear-usuario')
                                        <div class="col-md-6">
                                            <a class="btn btn-primary" href="/usuario/create">
                                                <i class="fa fa-plus-circle"></i> Nuevo</a>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="col-md-6 d-flex justify-content-end">
                                    <form action="{{ route('usuario.index') }}" method="get">
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
                                <table class="table table-striped">
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
                                        @if (count($usuarios) <= 0)
                                            <tr>
                                                <td colspan="10" class="text-center">No hay resultados</td>
                                            </tr>
                                        @endif
                                        <?php $i = 1; ?>
                                        @foreach ($usuarios as $usuario)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $usuario->tipo_documento }}</td>
                                                <td>{{ $usuario->numero_documento }}</td>
                                                <td>{{ Str::ucfirst($usuario->nombre) }}</td>
                                                <td>{{ Str::ucfirst($usuario->apellido) }}</td>
                                                <td>{{ $usuario->email }}</td>
                                                <td>{{ $usuario->telefono }}</td>
                                                <td>
                                                    <p class="badge bg-info text-white">{{ $usuario->nombre_rol }}</p>
                                                </td>
                                                <td>
                                                    <p
                                                        class="badge {{ $usuario->estado == 'activo' ? 'bg-success' : 'bg-danger' }} text-white">
                                                        {{ $usuario->estado }}</p>
                                                </td>
                                                <td>
                                                    <form action="{{ url("usuario/{$usuario->idUser}") }}" method="POST">
                                                        @foreach ($permisos as $permiso)
                                                            @if ($permiso->id_permiso == 'editar-usuario')
                                                                <a class="btn btn-info"
                                                                    href="{{ route('usuario.edit', Str::lower($usuario->slug)) }}"><i
                                                                        class="fas fa-edit"></i></a>
                                                            @endif
                                                            @if ($permiso->id_permiso == 'eliminar-usuario')
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            @endif
                                                        @endforeach
                                                        <!--<a class="edit-user btn btn-info" data-id="{{ $usuario->idUser }}"><i class="fas fa-edit"></i></a>-->
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end">
                                    {{ $usuarios->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
