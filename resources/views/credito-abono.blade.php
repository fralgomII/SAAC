@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Administración de Abonos a créditos</h1>
@stop

@section('content')
    <x-adminlte-card>
        <x-adminlte-button label="Nuevo Abono a Crédito" theme="primary" icon="fas fa-plus" />
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="dark" with-buttons>
                @foreach ($abonos as $abono)
                    <tr>
                        <td>{{ $abono->id }}</td>
                        <td>{{ $abono->fecha_abono }}</td>
                        <td>{{ $abono->aportante_id }}</td>
                        <td>{{ $abono->credito_id }}</td>
                        <td>{{ $abono->valor_abono }}</td>
                        <td>
                            <x-adminlte-button class="btn-sm" theme="info" icon="far fa-eye" />
                            <x-adminlte-button class="btn-sm" theme="success" icon="fas fa-pencil-alt" />
                            <x-adminlte-button class="btn-sm" theme="btn btn-secondary" icon="far fa-trash-alt" />
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </x-adminlte-card>
@stop
