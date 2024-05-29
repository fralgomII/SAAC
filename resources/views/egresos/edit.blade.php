@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Editar Egreso</h1>
@stop

@section('content')
    <x-adminlte-card>
        <form method="POST" action="{{ route('egresos.update', $egreso->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @php
                    $config = ['format' => 'YYYY-MM-DD'];
                @endphp
                <x-adminlte-input-date id="fecha_egreso" name="fecha_egreso" label="Fecha del Egreso" :config="$config"
                    placeholder="Seleccione fecha" fgroup-class="col-md-2" value="{{ $egreso->fecha_egreso }}">
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
                        <option value="{{ $asociado->id }}" {{ $egreso->asociado_id == $asociado->id ? 'selected' : '' }}>
                            {{ $asociado->nombre }}
                        </option>
                    @endforeach
                </x-adminlte-select>
                <x-adminlte-input name="valor_egreso" type="text" label="Valor Egreso" placeholder="0"
                    fgroup-class="col-md-3" class="text-right" min="50000" max="10000000"
                    value="{{ number_format($egreso->valor_egreso, 0, '.', ',') }}" />
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                        icon="fa fa-save" />
                    <a class="btn btn-secondary" href="{{ route('egresos.index') }}" role="button"><i
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
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }}
            Fralgóm Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop

@section('js')
    <script>
       $(document).ready(function() {
            // Formatear el valor al perder el foco del campo
            $('input[name="valor_egreso"]').on('change', function() {
                var valor = $(this).val().replace(/[^0-9]/g, '');
                var valor_formateado = Number(valor).toLocaleString();
                $(this).val(valor_formateado);
            });

            // Eliminar los separadores de miles solo antes de enviar el formulario
            $('form').on('submit', function() {
                var valor = $('input[name="valor_egreso"]').val().replace(/,/g, '');
                $('input[name="valor_egreso"]').val(valor);
            });
        });
    </script>

@stop
