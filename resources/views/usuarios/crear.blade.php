<div id="CrearUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear nuevo usuario</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            <form method="POST" id="crearUsuarioForm">
                <div class="alert alert-info">
                    Nota: Versión prueba plataforma la nueva realidad 2022
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipo_documento">Tipo de documento: </label><span class="text-danger">*</span>
                                <select class="form-control {{$errors->has('tipo_documento') ? 'is-invalid' : ''}}" name="tipo_documento" 
                                    id="tipo_documento" autofocus>
                                    <option value="">---- SELECCIONE ----</option>
                                    <option value="T.I">Tarjeta de identidad</option>
                                    <option value="C.C">Cédula de ciudadanía</option>
                                    <option value="C.E">Cédula de extranjeria</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numero_documento">Número de documento:</label><span class="text-danger">*</span>
                                <input id="numero_documento" type="text"
                                    class="form-control{{ $errors->has('numero_documento') ? ' is-invalid' : '' }}" name="numero_documento"
                                    value="{{ old('numero_documento') }}" autofocus>
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
                                    value="{{ old('nombre') }}" autofocus>
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
                                    value="{{ old('apellido') }}" autofocus>
                                <div class="invalid-feedback">
                                    {{ $errors->first('apellido') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo electronico personal:</label><span class="text-danger">*</span>
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}"
                                     autofocus>
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="correo_institucional">Correo electronico institucional:</label>
                                <input id="correo_institucional" type="email"
                                    class="form-control"
                                    name="correo_institucional" value="{{ old('correo_institucional') }}"
                                     autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="control-label">Contraseña
                                    :</label><span class="text-danger">*</span>
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password">
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation" class="control-label">Confirmar contraseña:</label><span
                                    class="text-danger">*</span>
                                <input id="password_confirmation" type="password"
                                    class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                    name="password_confirmation">
                                <div class="invalid-feedback">
                                    {{ $errors->first('password_confirmation') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Telefono:</label><span class="text-danger">*</span>
                                <input id="telefono" type="number"
                                    class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono"
                                    value="{{ old('telefono') }}" autofocus>
                                <div class="invalid-feedback">
                                    {{ $errors->first('telefono') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nivel_programa">Nivel programa: </label>
                                <select class="form-control {{$errors->has('nivel_programa') ? 'is-invalid' : ''}}" name="nivel_programa" 
                                    id="nivel_programa" autofocus>
                                    <option value="">---- SELECCIONE ----</option>
                                    <option value="técnico">Técnico</option>
                                    <option value="tecnológo">Tecnológo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="programa">Programa:</label>
                                <input id="programa" type="text"
                                    class="form-control{{ $errors->has('programa') ? ' is-invalid' : '' }}" name="programa"
                                    value="{{ old('programa') }}" autofocus>
                                <div class="invalid-feedback">
                                    {{ $errors->first('programa') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado">Estado: </label><span class="text-danger">*</span>
                                <select class="form-control {{$errors->has('estado') ? 'is-invalid' : ''}}" name="estado" 
                                    id="estado" autofocus>
                                    <option value="">---- SELECCIONE ----</option>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="rol">Rol: </label><span class="text-danger">*</span>
                                <select class="form-control {{$errors->has('rol') ? 'is-invalid' : ''}}" name="rol" 
                                    id="rol" autofocus>
                                    <option value="">---- SELECCIONE ---- </option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->nombre_rol}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

