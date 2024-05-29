@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Administración de Asociados</h1>
@stop

@section('content')
    <x-adminlte-card>
        @can('crear-asociados')
            <a class="btn btn-primary" href="{{ route('asociados.create') }}" role="button"><i class="fa fa-plus"></i> Nuevo
                Asociado</a>
        @endcan
        <div class="card-body">
            @php
                $config['language'] = ['url' => asset('vendor/datatables/es-CO.json')];
                //$config['paging'] = true;
                //$config['lengthMenu'] = [10, 50, 100, 500];
            @endphp
            <x-adminlte-datatable id="table1" :heads="[
                'Id',
                'Cédula',
                'Nombre y Apellidos',
                'Dirección',
                'Telefono',
                'Email',
                'Estado',
                'Fecha Afiliación',
                'Acciones',
            ]" head-theme="dark" :config=$config striped hoverable
                with-buttons>
                @foreach ($asociados as $asociado)
                    <tr>
                        <td>{{ $asociado->id }}</td>
                        <td>{{ $asociado->cedula }}</td>
                        <td>{{ $asociado->nombre }} {{ $asociado->primer_apellido }} {{ $asociado->segundo_apellido }}</td>
                        <td>{{ $asociado->direccion }}</td>
                        <td>{{ $asociado->celular }}</td>
                        <td>{{ $asociado->email }}</td>
                        <td>{{ $asociado->estado }}</td>
                        <td>{{ $asociado->fecha_afiliacion }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('asociados.show', $asociado->id) }}" role="button"><i
                                    class="far fa-eye"></i></a>
                            @can('editar-asociados')
                                <a class="btn btn-success" href="{{ route('asociados.edit', $asociado->id) }}"
                                    role="button"><i class="fas fa-pencil-alt"></i></a>
                            @endcan
                            <a class="btn btn-danger" href="{{ route('asociados.pdf', $asociado->id) }}" role="button"><i
                                class="fas fa-file-pdf"></i></a>
                            @can('borrar-asociados')
                                <form method="POST" action="{{ route('asociados.destroy', $asociado->id) }}"
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
                    title: "¿Estás seguro de Eliminar este Asociado?",
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
