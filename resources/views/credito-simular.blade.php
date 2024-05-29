@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Simular Crédito</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="row">
            <x-adminlte-select name="tipocredito_id" label="Tipo de Crédito" fgroup-class="col-md-3">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-list"></i>
                    </div>
                </x-slot>
                <option>Seleccione</option>
                <option>Crédito Libre inversión</option>
                <option>Crédito de estudio</option>
            </x-adminlte-select>
        </div>

        <div class="row">
            <x-adminlte-input name="valor_credito" type="number" label="Valor Crédito" placeholder="Valor Crédito"
                fgroup-class="col-md-3" />
            <x-adminlte-input name="plazo_credito" type="number" label="Plazo Crédito" placeholder="Plazo Crédito"
                fgroup-class="col-md-2" />
            <x-adminlte-input name="valor_cuota" type="number" label="Valor Cuota Mensual" placeholder="Valor Cuota"
                fgroup-class="col-md-3" />
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Calcular" theme="primary" icon="fa fa-save" />
                <x-adminlte-button label="Cancelar" theme="btn btn-secondary" icon="fa fa-undo" />
            </div>
        </div>
    </x-adminlte-card>
@stop
