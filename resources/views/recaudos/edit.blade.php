@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Recaudo</h1>
@stop

@section('content')
    <x-adminlte-card>
        <form method="POST" action="{{ route('recaudos.update', $recaudo->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @php
                    $config = ['format' => 'YYYY-MM-DD'];
                @endphp
                <x-adminlte-input-date id="fecha_recaudo" name="fecha_recaudo" label="Fecha del Recaudo" :config="$config"
                    placeholder="Seleccione fecha" fgroup-class="col-md-2" value="{{ $recaudo->fecha_recaudo }}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>
                <x-adminlte-select name="asociado_id" label="Nombre del asociado" fgroup-class="col-md-6">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccionar Asociado</option>
                    @foreach ($asociados as $asociado)
                        <option value="{{ $asociado->id }}" {{ $recaudo->asociado_id == $asociado->id ? 'selected' : '' }}>
                            {{ $asociado->nombre }}
                        </option>
                    @endforeach
                </x-adminlte-select>
                <x-adminlte-input name="valor_recaudo" type="number" label="Valor Recaudo" placeholder="50000"
                    fgroup-class="col-md-3" class="text-right" min="50000" max="10000000"
                    value="{{ $recaudo->valor_recaudo }}" />
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                        icon="fa fa-save" />
                    <a class="btn btn-secondary" href="{{ route('recaudos.index') }}" role="button"><i
                            class="fa fa-undo"></i> Cancelar</a>
                </div>
            </div>
        </form>
    </x-adminlte-card>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

@stop

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }} Fralgóm Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop
