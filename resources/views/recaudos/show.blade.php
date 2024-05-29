@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Detalles del Recaudo</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Fecha del Recaudo" text="{{ $recaudo->fecha_recaudo }}" icon="fas fa-calendar-alt"
                    theme="info" />
            </div>
            <div class="col-md-6">
                <x-adminlte-info-box title="Nombre del Asociado" text="{{ $recaudo->asociado->nombre }}" icon="fas fa-user"
                    theme="info" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <x-adminlte-info-box title="Valor del Recaudo" text="{{ $recaudo->valor_recaudo }}" icon="fas fa-money-bill"
                    theme="info" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <a class="btn btn-secondary" href="{{ route('recaudos.index') }}" role="button"><i class="fa fa-undo"></i>
                    Regresar</a>
            </div>
        </div>
    </x-adminlte-card>
@stop

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }} Fralgóm Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop
