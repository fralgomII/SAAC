@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Detalles de la Solicitud de Crédito</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="row">
            <div class="col-md-2">
                <label for="fecha_credito">Fecha de la Solicitud:</label>
                <input type="text" id="fecha_credito" name="fecha_credito" class="form-control"
                    value="{{ $credito->fecha_credito }}" readonly>
            </div>
            <div class="col-md-5">
                <label for="asociado_id">Nombre del asociado:</label>
                <input type="text" id="asociado_id" name="asociado_id" class="form-control"
                    value="{{ $credito->asociado->nombre }} {{ $credito->asociado->primer_apellido }} {{ $credito->asociado->segundo_apellido }}" readonly>
            </div>
            <div class="col-md-4">
                <label for="lineacredito_id">Línea de Crédito:</label>
                <input type="text" id="lineacredito_id" name="lineacredito_id" class="form-control"
                    value="{{ $credito->lineacredito->nombre }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label for="valor_credito">Valor Crédito:</label>
                <input type="text" id="valor_credito" name="valor_credito" class="form-control"
                    value="{{ $credito->valor_credito }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="interes_anual">Interés Anual(%):</label>
                <input type="text" id="interes_anual" name="interes_anual" class="form-control"
                    value="{{ $credito->interes_anual }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="interes_credito">Interés (%):</label>
                <input type="text" id="interes_credito" name="interes_credito" class="form-control"
                    value="{{ $credito->interes_credito }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="seguro_deudor">Seguro de Vida Deudor:</label>
                <input type="text" id="seguro_deudor" name="seguro_deudor" class="form-control"
                    value="{{ $credito->seguro_deudor }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="seguro_credito">Seguro de Crédito:</label>
                <input type="text" id="seguro_credito" name="seguro_credito" class="form-control"
                    value="{{ $credito->seguro_credito }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="plazo_credito">Plazo (en meses):</label>
                <input type="text" id="plazo_credito" name="plazo_credito" class="form-control"
                    value="{{ $credito->plazo_credito }}" readonly>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <label for="valor_cuota">Valor de la Cuota:</label>
                <input type="text" id="valor_cuota" name="valor_cuota" class="form-control"
                    value="{{ $credito->valor_cuota }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="estado">Estado del Crédito:</label>
                <input type="text" id="estado" name="estado" class="form-control" value="{{ $credito->estado }}"
                    readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <a class="btn btn-secondary" href="{{ route('creditos.index') }}" role="button"><i
                        class="fa fa-undo"></i> Regresar</a>
            </div>
        </div>
    </x-adminlte-card>

    <x-adminlte-card title="Amortización del Crédito">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Número de Cuota</th>
                        <th class="text-center">Valor del Crédito</th>
                        <th class="text-center">Interés Pagado</th>
                        <th class="text-center">Capital</th>
                        <th class="text-center">Seguro Deudor</th>
                        <th class="text-center">Seguro Crédito</th>
                        <th class="text-center">Valor Cuota</th>
                        <th class="text-center">Saldo del Crédito</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán los detalles de las cuotas -->
                    @foreach ($credito->movimientos as $movimiento)
                        <tr>
                            <td>{{ $movimiento->cuota }}</td>
                            <td class="text-right">{{ $movimiento->valor_credito }}</td>
                            <td class="text-right">{{ $movimiento->interes }}</td>
                            <td class="text-right">{{ $movimiento->capital }}</td>
                            <td class="text-right">{{ $movimiento->seguro_deudor }}</td>
                            <td class="text-right">{{ $movimiento->seguro_credito }}</td>
                            <td class="text-right">{{ $movimiento->valor_cuota }}</td>
                            <td class="text-right">{{ $movimiento->saldo_credito }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
