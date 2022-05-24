@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Dashboard</h4>
        </div>
        <div class="section-body">
            <form action="/rol" method="post">
                <div class="alert alert-info">
                    Nota: Versión prueba plataforma la nueva realidad 2022
                </div>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombre_rol">Rol:</label><span class="text-danger">*</span>
                            <input id="nombre_rol" type="text"
                                class="form-control{{ $errors->has('nombre_rol') ? ' is-invalid' : '' }}"
                                name="nombre_rol" value="{{ old('nombre_rol') }}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('nombre_rol') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="">Permisos para este rol:</label>
                        @foreach ($permisos as $permiso)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="permisos_rol[]" id="flexCheckDefault" value="{{$permiso->nombre}}">
                            <label class="form-check-label">{{$permiso->nombre}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="mb-4 ml-3 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Registrar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
