@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Roles</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 container">
                    <div class="card">
                        <div class="card-header">
                            <div class="row w-100">
                                @foreach ($permisos as $permiso)
                                    @if ($permiso->id_permiso == 'crear-rol')
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <a class="btn btn-primary" href="/rol/create">Nuevo</a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-md">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                        @foreach ($roles as $rol)
                                            <tr>
                                                <td>{{ $rol->id }}</td>
                                                <td>{{ $rol->nombre_rol }}</td>
                                                <td>
                                                    @foreach ($permisos as $permiso)
                                                        @if ($permiso->id_permiso == 'editar-rol')
                                                            <form action="{{ route('rol.destroy', $rol->id) }}"
                                                                method="post">
                                                                <a class="btn btn-info"
                                                                    href="/rol/{{ $rol->id }}/edit">Editar</a>
                                                        @endif
                                                        @if ($permiso->id_permiso == 'eliminar-rol')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                                            </form>
                                                        @endif
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
