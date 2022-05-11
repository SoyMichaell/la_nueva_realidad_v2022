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
                            <h4>Listado de empresas registrados</h4>
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
                                            <th>--</th>
                                        </tr>
                                        <?php $i=1; ?>
                                        @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$empresa->nit}}</td>
                                            <td>{{Str::ucfirst($empresa->razon_social)}}</td>
                                            <td>{{$empresa->correo}}</td>
                                            <td>{{$empresa->telefono1}}</td>
                                            <td>{{$empresa->direccion}}</td>
                                            <td>{{$empresa->municipio}}</td>
                                            <td>
                                                <form action="{{url("empresa/{$empresa->id}")}}" method="post">
                                                    <a class="btn btn-info" href="#"><i class="fas fa-edit"></i></a>
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
