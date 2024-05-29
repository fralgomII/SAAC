@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Detalle de la Línea de Crédito</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Nombre" text="{{ $lineacreditos->nombre }}" icon="fas fa-user" theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Valor Máximo" text="{{ number_format($lineacreditos->valor, 0, ',', '.') }}"
                    icon="fa fa-money" theme="info" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Plazo (en meses)" text="{{ $lineacreditos->plazo }}" icon="fas fa-calendar-alt"
                    theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Estado de la línea de Crédito" text="{{ $lineacreditos->estado }}"
                    icon="fas fa-clipboard-check" theme="info" />
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Interés Anual(%)" text="{{ $lineacreditos->interes_anual }}" icon="fa fa-percent"
                    theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Interés (%)" text="{{ $lineacreditos->interes }}" icon="fa fa-percent"
                    theme="info" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Seguro de Vida" text="{{ number_format($lineacreditos->seguro_vida, 0, ',', '.') }}"
                    icon="fa fa-money" theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Seguro del crédito" text="{{ number_format($lineacreditos->seguro_credito, 0, ',', '.') }}"
                    icon="fa fa-money" theme="info" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <a class="btn btn-secondary" href="{{ route('lineacreditos.index') }}" role="button"><i
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
