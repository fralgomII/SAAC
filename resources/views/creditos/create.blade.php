@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Registrar Solicitud de Crédito</h1>
@stop

@section('content')
    <x-adminlte-card>
        <form method="POST" action="{{ route('creditos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @php
                    $config = ['format' => 'YYYY-MM-DD'];
                @endphp
                <x-adminlte-input-date id="fecha_credito" name="fecha_credito" label="Fecha de la Solicitud" :config="$config"
                    placeholder="Seleccione fecha" fgroup-class="col-md-2">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input-date>
                <x-adminlte-select name="asociado_id" label="Nombre del asociado" fgroup-class="col-md-5">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccionar Asociado</option>
                    @foreach ($asociados as $asociado)
                        <option value="{{ $asociado->id }}">{{ $asociado->nombre }} {{ $asociado->primer_apellido }}
                            {{ $asociado->segundo_apellido }}</option>
                    @endforeach
                </x-adminlte-select>
                <x-adminlte-select name="lineacredito_id" label="Línea de Crédito" fgroup-class="col-md-4">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-user"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccionar Linea</option>
                    @foreach ($lineacreditos as $lineacredito)
                        <option value="{{ $lineacredito->id }}" data-interes="{{ $lineacredito->interes }}"
                            data-interes-anual="{{ $lineacredito->interes_anual }}"
                            data-seguro-vida="{{ $lineacredito->seguro_deudor }}"
                            data-seguro-credito="{{ $lineacredito->seguro_credito }}">
                            {{ $lineacredito->nombre }}
                        </option>
                    @endforeach
                </x-adminlte-select>
            </div>
            <div class="row">
                <x-adminlte-input id="valor_credito_input" name="valor_credito" type="text" label="Valor Crédito"
                    placeholder="0" fgroup-class="col-md-2" class="text-right" min="500000" max="50000000"
                    onchange="formatoNumero()" />
                <x-adminlte-input name="interes_anual" id="interes_anual" type="number" label="Interés Anual(%)"
                    placeholder="1" fgroup-class="col-md-2" class="text-right" min="8" max="100"
                    step="0.01" />
                <x-adminlte-input name="interes_credito" id="interes_credito" type="number" label="Interés (%)"
                    placeholder="1" fgroup-class="col-md-2" class="text-right" min="0.5" max="100"
                    step="0.01" />
                <x-adminlte-input name="seguro_deudor" type="number" label="Seguro de Vida Deudor" placeholder="0"
                    fgroup-class="col-md-2" class="text-right" min="0" max="100000" step="100" />
                <x-adminlte-input name="seguro_credito" type="number" label="Seguro de Crédito" placeholder="0"
                    fgroup-class="col-md-2" class="text-right" min="0" max="100000" step="100" />
                <input type="hidden" id="interes_linea_credito" name="interes_linea_credito" value="" />
                <x-adminlte-input name="plazo_credito" id="plazo_credito" type="number" label="Plazo (en meses)"
                    placeholder="12" fgroup-class="col-md-2" class="text-right" min="12" max="120"
                    onchange="calcularCuota()" />
            </div>

            <div class="row">
                <x-adminlte-input name="valor_cuota" id="valor_cuota" type="number" label="Valor de la Cuota"
                    placeholder="" fgroup-class="col-md-2" class="text-right" readonly />
                <x-adminlte-select name="estado" label="Estado del Crédito" fgroup-class="col-md-2">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-list"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccionar Estado</option>
                    <option value="Solicitado">Solicitado</option>
                    <option value="En Estudio">En Estudio</option>
                    <option value="Aprobado">Aprobado</option>
                    <option value="Rechazado">Rechazado</option>
                </x-adminlte-select>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                        icon="fa fa-save" />
                    <a class="btn btn-secondary" href="{{ route('creditos.index') }}" role="button"><i
                            class="fa fa-undo"></i> Cancelar</a>
                </div>
            </div>
        </form>
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
                <tbody id="detalleCuotas">
                    <!-- Aquí se generarán dinámicamente las filas de la tabla -->
                </tbody>
            </table>
        </div>
    </x-adminlte-card>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function calcularCuota() {
            var valorCredito = parseFloat($('#valor_credito_input').val().replace(/\./g, '').replace(',', '.'));
            var interes = parseFloat($('#interes_credito').val()) / 100;
            var plazo = parseInt($('#plazo_credito').val());
            var seguroVida = parseInt($('#seguro_deudor').val());
            var seguroCredito = parseInt($('#seguro_credito').val());

            // Calcula el valor de la cuota mensual incluyendo el seguro de vida y seguro de crédito
            var valorCuota = (valorCredito * interes + seguroVida + seguroCredito) / (1 - Math.pow(1 + interes, -plazo));

            // Calcula la amortización del crédito
            var amortizacionCredito = valorCuota - (valorCredito * interes + seguroVida + seguroCredito);

            $('#valor_cuota').val(valorCuota.toFixed(2));
            // Asigna el valor de la amortización al campo correspondiente
            $('#amortizacion_credito_display').val(amortizacionCredito.toFixed(2));
        }
    </script>

    <script>
        // Función para formatear un número con separador de miles
        function formatearNumero(numero) {
            return numero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // Función para calcular y mostrar los detalles de las cuotas del préstamo
        function calcularDetallesCuotas() {
            var valorCredito = parseFloat($('#valor_credito_input').val().replace(/\./g, '').replace(',', '.'));
            var interesAnual = parseFloat($('#interes_anual').val()) / 100;
            var plazo = parseInt($('#plazo_credito').val());
            var seguroVida = parseInt($('#seguro_deudor').val());
            var seguroCredito = parseInt($('#seguro_credito').val());
            var saldoCredito = valorCredito;
            var detalleCuotasHtml = '';
            var totalInteresPagado = 0;
            var totalAbonoCapital = 0;
            var totalSeguroVida = 0;
            var totalSeguroCredito = 0;
            var totalValorCuota = 0;

            for (var i = 1; i <= plazo; i++) {
                var interesPagado = saldoCredito * (interesAnual / 12);
                var valorCuota = (valorCredito * interesAnual / 12) / (1 - Math.pow(1 + (interesAnual / 12), -plazo));
                var abonoCapital = valorCuota - interesPagado - seguroVida - seguroCredito;
                saldoCredito -= abonoCapital;

                totalInteresPagado += interesPagado;
                totalAbonoCapital += abonoCapital;
                totalSeguroVida += seguroVida;
                totalSeguroCredito += seguroCredito;
                totalValorCuota += valorCuota;

                detalleCuotasHtml += `
                <tr>
                    <td>${i}</td>
                    <td class="text-right">${formatearNumero(valorCredito.toFixed(2))}</td>
                    <td class="text-right">${formatearNumero(interesPagado.toFixed(2))}</td>
                    <td class="text-right">${formatearNumero(abonoCapital.toFixed(2))}</td>
                    <td class="text-right">${formatearNumero(seguroVida)}</td>
                    <td class="text-right">${formatearNumero(seguroCredito)}</td>
                    <td class="text-right">${formatearNumero(valorCuota.toFixed(2))}</td>
                    <td class="text-right">${formatearNumero(saldoCredito.toFixed(2))}</td>
                </tr>
            `;
            }

            // Agregar la fila de totales al final de la tabla
            detalleCuotasHtml += `
            <tr>
                <td colspan="2"><b>Total:</b></td>
                <td class="text-right"><b>${formatearNumero(totalInteresPagado.toFixed(2))}</b></td>
                <td class="text-right"><b>${formatearNumero(totalAbonoCapital.toFixed(2))}</b></td>
                <td class="text-right"><b>${formatearNumero(totalSeguroVida.toFixed(2))}</b></td>
                <td class="text-right"><b>${formatearNumero(totalSeguroCredito.toFixed(2))}</b></td>
                <td class="text-right"><b>${formatearNumero(totalValorCuota.toFixed(2))}</b></td>
                <td></td>
            </tr>
        `;

            $('#detalleCuotas').html(detalleCuotasHtml);
        }

        // Llamar a la función para calcular y mostrar los detalles de las cuotas cuando cambie algún campo relevante
        $('#valor_credito_input, #interes_anual, #seguro_deudor, #seguro_credito, #plazo_credito').on('input', function() {
            calcularDetallesCuotas();
        });

        // Llamar a la función al cargar la página
        calcularDetallesCuotas();
    </script>

    <script>
        // Función para actualizar el campo de interés del crédito
        function actualizarInteresCredito() {
            var selectedOption = document.getElementsByName('lineacredito_id')[0].selectedOptions[0];
            var interesAnualLineaCredito = selectedOption.getAttribute('data-interes-anual');
            var interesLineaCredito = selectedOption.getAttribute('data-interes');
            var seguroVida = selectedOption.getAttribute('data-seguro-vida');
            var seguroCredito = selectedOption.getAttribute('data-seguro-credito');

            document.getElementById('interes_anual').value = interesAnualLineaCredito;
            document.getElementById('interes_credito').value = interesLineaCredito;
            document.getElementById('seguro_deudor').value = seguroVida;
            document.getElementById('seguro_credito').value = seguroCredito;
        }

        // Cuando se cambia la línea de crédito seleccionada, actualizar el interés y los seguros del crédito
        document.getElementById('lineacredito_id').addEventListener('change', function() {
            actualizarInteresCredito();
        });

        // Actualizar el interés y los seguros del crédito cuando se carga la página
        window.addEventListener('DOMContentLoaded', function() {
            actualizarInteresCredito();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Ejecutar el formateo al cargar la página
            formatoNumero();

            // Llamar a calcularCuota() cuando se cargue la página
            calcularCuota();

            // Eliminar los separadores de miles y comas solo antes de enviar el formulario
            $('form').on('submit', function() {
                var valor = $('#valor_credito_input').val().replace(/\./g, '').replace(',', '');
                $('#valor_credito_input').val(valor);
            });
        });

        function formatoNumero() {
            var valor = $('#valor_credito_input').val().replace(/\./g, '').replace(',', '');
            var valor_formateado = Number(valor.replace(/[^0-9\.]/g, '')).toLocaleString('es-ES', {
                maximumFractionDigits: 2
            });
            $('#valor_credito_input').val(valor_formateado);
        }
    </script>

    <script>
        $(document).ready(function() {
            // Limpiar valor_credito antes de enviar el formulario
            $('form').on('submit', function() {
                var valor = $('#valor_credito_input').val().replace(/[^\d.]/g, '');
                $('#valor_credito_input').val(valor);
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
