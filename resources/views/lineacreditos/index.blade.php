@extends('adminlte::page')

@section('title', 'SAAC')
@section('content_header')
    <h1 class="m-0 text-dark">Administración de Líneas de Créditos</h1>
@stop

@section('content')
    <x-adminlte-card>
        @can('crear-lineacreditos')
            <a class="btn btn-primary" href="{{ route('lineacreditos.create') }}" role="button"><i class="fa fa-plus"></i> Nueva
                Línea de Crédito</a>
        @endcan
        <div class="card-body">
            @php
                $config['language'] = ['url' => asset('vendor/datatables/es-CO.json')];
                //$config['paging'] = true;
                //$config['lengthMenu'] = [10, 50, 100, 500];
            @endphp
            <x-adminlte-datatable id="table1" :heads="[
                'Id',
                'Nombre',
                'Plazo',
                'Valor Máx.',
                'Interés Anual',
                'Interés',
                'Seguro Vida',
                'Seguro Crédito',
                'Estado',
                'Acciones',
            ]" head-theme="dark" :config=$config striped hoverable
                with-buttons>

                @foreach ($lineacreditos as $lineacredito)
                    <tr>
                        <td>{{ $lineacredito->id }}</td>
                        <td>{{ $lineacredito->nombre }}</td>
                        <td>{{ $lineacredito->plazo }}</td>
                        <td>{{ number_format($lineacredito->valor, 0, ',', '.') }}</td>
                        <td>{{ $lineacredito->interes_anual }}</td>
                        <td>{{ $lineacredito->interes }}</td>
                        <td>{{ number_format($lineacredito->seguro_vida, 0, ',', '.') }}</td>
                        <td>{{ number_format($lineacredito->seguro_credito, 0, ',', '.') }}</td>
                        <td>{{ $lineacredito->estado }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('lineacreditos.show', $lineacredito->id) }}"
                                role="button"><i class="far fa-eye"></i></a>
                            @can('editar-lineacreditos')
                                <a class="btn btn-success" href="{{ route('lineacreditos.edit', $lineacredito->id) }}"
                                    role="button"><i class="fas fa-pencil-alt"></i></a>
                            @endcan
                            <a class="btn btn-danger" href="{{ route('asociados.pdf', $lineacredito->id) }}" role="button"><i
                                class="fas fa-file-pdf"></i></a>
                            @can('borrar-lineacreditos')
                                <form method="POST" action="{{ route('lineacreditos.destroy', $lineacredito->id) }}"
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
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }}
            Fralgóm Ingeniería
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
                    title: "¿Estás seguro de Eliminar esta línea de Crédito?",
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
