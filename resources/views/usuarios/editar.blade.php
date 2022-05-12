@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Dashboard</h4>
        </div>
        <div class="section-body">
            <form action="/usuario/{{$usuario->slug}}" method="post">
                <div class="alert alert-info">
                    Nota: Versión prueba plataforma la nueva realidad 2022
                </div>
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo_documento">Tipo de documento: </label><span class="text-danger">*</span>
                            <select class="form-control {{ $errors->has('tipo_documento') ? 'is-invalid' : '' }}"
                                name="tipo_documento" id="tipo_documento" autofocus>
                                <option value="">---- SELECCIONE ----</option>
                                <option value="T.I" {{$usuario->tipo_documento == 'T.I' ? 'selected' : ''}}>Tarjeta de identidad</option>
                                <option value="C.C" {{$usuario->tipo_documento == 'C.C' ? 'selected' : ''}}>Cédula de ciudadanía</option>
                                <option value="C.E" {{$usuario->tipo_documento == 'C.E' ? 'selected' : ''}}>Cédula de extranjeria</option>
                            </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('tipo_documento') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_documento">Número de documento:</label><span class="text-danger">*</span>
                            <input id="numero_documento" type="text"
                                class="form-control{{ $errors->has('numero_documento') ? ' is-invalid' : '' }}"
                                name="numero_documento" value="{{$usuario->numero_documento}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('numero_documento') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre (s):</label><span class="text-danger">*</span>
                            <input id="nombre" type="text"
                                class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre"
                                value="{{$usuario->nombre}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('nombre') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido (s):</label><span class="text-danger">*</span>
                            <input id="apellido" type="text"
                                class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido"
                                value="{{$usuario->apellido}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('apellido') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Correo electronico personal:</label><span class="text-danger">*</span>
                            <input id="email" type="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                value="{{$usuario->email}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="correo_institucional">Correo electronico institucional:</label>
                            <input id="correo_institucional" type="email" class="form-control" name="correo_institucional"
                                value="{{$usuario->correo_institucional}}" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefono">Telefono:</label><span class="text-danger">*</span>
                            <input id="telefono" type="number"
                                class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono"
                                value="{{$usuario->telefono}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nivel_programa">Nivel programa: </label>
                            <select class="form-control {{ $errors->has('nivel_programa') ? 'is-invalid' : '' }}"
                                name="nivel_programa" id="nivel_programa" autofocus>
                                <option value="">---- SELECCIONE ----</option>
                                <option value="técnico" {{$usuario->nivel_programa == 'técnico' ? 'selected' : ''}}>Técnico</option>
                                <option value="tecnológo" {{$usuario->nivel_programa == 'tecnológo' ? 'selected' : ''}}>Tecnológo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="programa">Programa:</label>
                            <input id="programa" type="text"
                                class="form-control{{ $errors->has('programa') ? ' is-invalid' : '' }}" name="programa"
                                value="{{$usuario->programa}}" autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('programa') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="estado">Estado: </label><span class="text-danger">*</span>
                            <select class="form-control {{ $errors->has('estado') ? 'is-invalid' : '' }}" name="estado"
                                id="estado" autofocus>
                                <option value="">---- SELECCIONE ----</option>
                                <option value="activo" {{$usuario->estado == 'activo' ? 'selected' : ''}}>Activo</option>
                                <option value="inactivo" {{$usuario->estado == 'inactivo' ? 'selected' : ''}}>Inactivo</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            {{ $errors->first('estado') }}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="rol">Rol: </label><span class="text-danger">*</span>
                            <select class="form-control {{ $errors->has('rol') ? 'is-invalid' : '' }}" name="rol"
                                id="rol" autofocus>
                                <option value="">---- SELECCIONE ---- </option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{$usuario->rol == $role->id ? 'selected' : ''}}>{{ $role->nombre_rol }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="invalid-feedback">
                            {{ $errors->first('rol') }}
                        </div>
                    </div>
                    <div class="mb-4 ml-3 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Actualizar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
