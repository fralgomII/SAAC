@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Detalle del Periodo</h1>
@stop

@section('content')
    <x-adminlte-card title="Detalles del Periodo">
        <div class="row">
            <div class="col-md-2">
                <x-adminlte-info-box title="Mes" text="{{ $periodos->mes }}" icon="far fa-calendar-alt" theme="info" />
            </div>
            <div class="col-md-2">
                <x-adminlte-info-box title="Año" text="{{ $periodos->año }}" icon="fas fa-calendar-alt" theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Nombre" text="{{ $periodos->nombre }}" icon="fas fa-user" theme="info" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Estado del Periodo" text="{{ $periodos->estado }}"
                    icon="fas fa-clipboard-check" theme="info" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <a class="btn btn-secondary" href="{{ route('periodos.index') }}" role="button"><i
                        class="fa fa-undo"></i> Regresar</a>
            </div>
        </div>
    </x-adminlte-card>
@stop

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }}
            Fralgóm Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop
