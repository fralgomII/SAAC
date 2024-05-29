@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Administración de Créditos</h1>
@stop

@section('content')
    <x-adminlte-card>
        @can('crear-creditos')
            <a class="btn btn-primary" href="{{ route('creditos.create') }}" role="button"><i class="fa fa-plus"></i> Nueva
                Solicitud de Crédito</a>
        @endcan
        <div class="card-body">
            @php
                $config['language'] = ['url' => asset('vendor/datatables/es-CO.json')];
                //$config['paging'] = true;
                //$config['lengthMenu'] = [10, 50, 100, 500];
            @endphp
            <x-adminlte-datatable id="table1" :heads="[
                'Id',
                'Fecha Crédito',
                'Asociado',
                'Línea de Crédito',
                'Interes Anual',
                'Interes Mensual',
                'Valor Crédito',
                'Plazo Crédito',
                'Valor Cuota',
                'Estado',
                'Acciones',
            ]" head-theme="dark" :config=$config striped hoverable with-buttons>
                @foreach ($creditos as $credito)
                    <tr>
                        <td>{{ $credito->id }}</td>
                        <td>{{ $credito->fecha_credito }}</td>
                        <td>{{ $credito->asociado->nombre }} {{ $credito->asociado->primer_apellido }} {{ $credito->asociado->segundo_apellido }}</td>
                        <td>{{ $credito->lineacredito->nombre }}</td>
                        <td>{{ $credito->interes_anual }}</td>
                        <td>{{ $credito->interes_credito }}</td>
                        <td>{{ number_format($credito->valor_credito, 0, ',', '.') }}</td>
                        <td>{{ $credito->plazo_credito }}</td>
                        <td>{{ number_format($credito->valor_cuota, 2, ',', '.') }}</td>
                        <td>{{ $credito->estado }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('creditos.show', $credito->id) }}" role="button"><i
                                    class="far fa-eye"></i></a>
                            @can('editar-creditos')
                                <a class="btn btn-success" href="{{ route('creditos.edit', $credito->id) }}" role="button"><i
                                        class="fas fa-pencil-alt"></i></a>
                            @endcan
                            <a class="btn btn-danger" href="{{ route('asociados.pdf', $credito->id) }}" role="button"><i
                                class="fas fa-file-pdf"></i></a>
                            @can('borrar-creditos')
                                <form method="POST" action="{{ route('creditos.destroy', $credito->id) }}"
                                    style="display: inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning delete-button">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </x-adminlte-card>
@stop

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }} Fralgóm
            Ingeniería
            Informática. Todos los derechos reservados.</p>
    </footer>
@stop

@section('js')

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                title: "Operación Exitosa!",
                text: "{{ $message }}",
                timer: 2000,
                icon: "success"
            });
        </script>
    @endif

    <script>
        var deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var form = this.parentElement;
                Swal.fire({
                    title: "¿Estás seguro de Eliminar este Crédito?",
                    text: "¡No se podrá recuperar la información!",
                    icon: "error",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "¡Sí, Eliminar!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
@stop
