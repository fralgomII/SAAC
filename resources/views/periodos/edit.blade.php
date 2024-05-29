@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Periodo</h1>
@stop

@section('content')
    <x-adminlte-card title="Modifique los datos del Periodo">
        <form method="POST" action="{{ route('periodos.update', $periodos->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <x-adminlte-input name="mes" label="Mes" placeholder="Mes del periodo"
                    fgroup-class="col-md-1" :value="$periodos->mes" />
                <x-adminlte-input name="año" label="Año" placeholder="Año del periodo"
                    fgroup-class="col-md-1" :value="$periodos->año" />
                <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre del periodo"
                    fgroup-class="col-md-6" :value="$periodos->nombre" />
            </div>
            <div class="row">
                <x-adminlte-select name="estado" label="Estado del Periodo" fgroup-class="col-md-2">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-list"></i>
                        </div>
                    </x-slot>
                    <option value="Abierto" {{ $periodos->estado === 'Abierto' ? 'selected' : '' }}>Abierto</option>
                    <option value="Cerrado" {{ $periodos->estado === 'Cerrado' ? 'selected' : '' }}>Cerrado</option>
                </x-adminlte-select>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar Cambios" theme="primary"
                        icon="fa fa-save" />
                    <a class="btn btn-secondary" href="{{ route('periodos.index') }}" role="button"><i
                            class="fa fa-undo"></i> Cancelar</a>
                </div>
            </div>
        </form>
    </x-adminlte-card>
@stop

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }}
            Fralgóm Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop
