@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="page__heading">Aplicativo encuesta</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Empresas población general</div>
                        <div class="card-body">
                            <div id="grafico_empresa"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
        @include('grafico/script_grafico');
    @endsection
@endsection
