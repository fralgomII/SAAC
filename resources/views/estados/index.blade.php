@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Estado de Cuenta de Asociados</h1>
@stop

@section('content')
    <x-adminlte-card>
        <div class="card-body">
            @can('ver-estado')
                @php
                    $config['language'] = ['url' => asset('vendor/datatables/es-CO.json')];
                    //$config['paging'] = true;
                    //$config['lengthMenu'] = [10, 50, 100, 500];
                @endphp
            @endcan
        </div>
    </x-adminlte-card>
@stop

@section('footer')
    <footer>
        <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }} Fralgóm Ingeniería
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
@stop
