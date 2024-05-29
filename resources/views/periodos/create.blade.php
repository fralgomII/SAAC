@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Periodo</h1>
@stop

@section('content')
    <x-adminlte-card title="Ingrese todos los datos del Periodo">
        <form method="POST" action="{{ route('periodos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <x-adminlte-input name="mes" label="Mes" placeholder="Mes del Periodo"
                    fgroup-class="col-md-1" />

                <x-adminlte-input name="año" label="Año" placeholder="Año del Periodo"
                    fgroup-class="col-md-1" />

                <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre del Periodo"
                    fgroup-class="col-md-6" />
            </div>

            <div class="row">
                <x-adminlte-select name="estado" label="Estado del Periodo" fgroup-class="col-md-2">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-list"></i>
                        </div>
                    </x-slot>
                    <option value="Cerrado">Cerrado</option>
                    <option value="Abierto">Abierto</option>
                </x-adminlte-select>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                        icon="fa fa-save" />
                    <a class="btn btn-secondary" href="{{ route('periodos.index') }}" role="button"><i
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
