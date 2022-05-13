@extends('layouts.app')
@section('content')
@section('css')
    <style>
        .icon_font{
            font-size: 20px;
            padding: 8px;
            border: none;
            border-radius: 50%;
            color: green;
        }
        .icon_font:hover{
            background-color: #f2f2f2;
        }
    </style>
@endsection
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Aplicativo encuesta</h1>
        </div>
        <div class="section-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row col-md-12">
                            <div class="col-md-6">
                                <h1 class="section-title">Herramienta de diagnostico</h1>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <a href="https://docs.google.com/spreadsheets/d/1pQMV4cVxy7qX2aW64Sv8D031FwM7_-xj5qP0Avq06ig/edit?resourcekey#gid=939581415" title="Descargar respuestas" target="_blank"><i class="icon_font fas fa-file-excel"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <iframe
                            src="https://docs.google.com/forms/d/e/1FAIpQLSffr-1YclC_vtXDfzszZkWqTVRgOt5VqQxdCMuJKZjCz5zg0w/viewform?embedded=true"
                            width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
