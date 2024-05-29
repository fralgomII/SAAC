@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
<h1 class="m-0 text-dark">Registrar Línea de Crédito</h1>
@stop

@section('content')
<x-adminlte-card>
    <form method="POST" action="{{ route('lineacreditos.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre de la linea de Crédito"
                fgroup-class="col-md-6" />
            <x-adminlte-input name="plazo" type="number" label="Plazo (en meses)" placeholder="12"
                fgroup-class="col-md-2" class="text-right" min="12" max="120" />
            <x-adminlte-input name="valor" type="number" label="Valor Máximo" placeholder="100000"
                fgroup-class="col-md-3" class="text-right" min="100000" max="120000000" />

        </div>
        <div class="row">
            <x-adminlte-input name="interes_anual" type="number" id="interes_anual" label="Interés Anual(%)"
                placeholder="12" fgroup-class="col-md-2" class="text-right" min="12" max="100" step="0.1" />
            <x-adminlte-input name="interes" type="number" id="interes" label="Interés Mensual(%)" placeholder="1"
                fgroup-class="col-md-2" class="text-right" min="1" max="100" step="0.01" readonly />
            <x-adminlte-input name="seguro_vida" type="number" label="Seguro de Vida Deudor" placeholder="0"
                fgroup-class="col-md-2" class="text-right" min="0" max="1000000" step="100" />
            <x-adminlte-input name="seguro_credito" type="number" label="Seguro de Crédito" placeholder="0"
                fgroup-class="col-md-2" class="text-right" min="0" max="1000000" step="100"  />
        </div>
        <div class="row">
            <x-adminlte-select name="estado" label="Estado de la Linea de Crédito" fgroup-class="col-md-2">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-list"></i>
                    </div>
                </x-slot>
                <option value="">Seleccionar Estado</option>
                <option value="Activo">Activo</option>
                <option value="Retirado">Inactivo</option>
            </x-adminlte-select>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                    icon="fa fa-save" />
                <a class="btn btn-secondary" href="{{ route('lineacreditos.index') }}" role="button"><i
                        class="fa fa-undo"></i> Cancelar</a>
            </div>
        </div>
    </form>
</x-adminlte-card>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const interesAnualInput = document.querySelector('input[name="interes_anual"]');
    const interesMensualInput = document.querySelector('input[name="interes"]');

    // Añadir un listener para el evento 'input' en el campo de interés anual
    interesAnualInput.addEventListener('input', function() {
        // Obtener el valor ingresado en el campo de interés anual
        const interesAnual = parseFloat(interesAnualInput.value);

        // Calcular el interés mensual dividiendo el interés anual por 12
        const interesMensual = interesAnual / 12;

        // Asignar el valor del interés mensual al campo de interés
        interesMensualInput.value = interesMensual.toFixed(2);

        // Actualizar el valor del campo de interés para que se envíe con el formulario
        //interesMensualInput.disabled = false;
        //interesMensualInput.value = interesMensual.toFixed(2);
    });
});
</script>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@stop

@section('footer')
<footer>
    <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }}
        Fralgóm Ingeniería
        Informática. Todos los derechos reservados.</p>
</footer>
@stop