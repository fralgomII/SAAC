@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Configuración de la Empresa</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="row">
            <x-adminlte-input name="Nit" label="Nit" placeholder="Nit de la Empresa" fgroup-class="col-md-2" />
            <x-adminlte-input name="nombre" label="Nombre de la Empresa" placeholder="Nombre de la Empresa"
                fgroup-class="col-md-8" />
        </div>
        <div class="row">
            <x-adminlte-input name="direccion" label="Dirección" placeholder="Dirección de la Empresa"
                fgroup-class="col-md-5" />
            <x-adminlte-input name="telefono" label="Teléfono" placeholder="Teléfono de la Empresa"
                fgroup-class="col-md-2" />
            <x-adminlte-input name="email" type="email" label="Email" placeholder="Email de la Empresa"
                fgroup-class="col-md-5" />
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Guardar" theme="primary" icon="fa fa-save" />
                <x-adminlte-button label="Cancelar" theme="btn btn-secondary" icon="fa fa-undo" />
            </div>
        </div>
    </x-adminlte-card>
@stop
