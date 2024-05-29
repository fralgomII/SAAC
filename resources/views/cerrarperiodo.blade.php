@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Cierre de Periodo</h1>
@stop

@section('content')
    <x-adminlte-card>
        

        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Cerrar Periodo" theme="primary" icon="fa fa-save" />
                <x-adminlte-button label="Cancelar" theme="btn btn-secondary" icon="fa fa-undo" />
            </div>
        </div>
    </x-adminlte-card>
@stop
