@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
    <h1 class="m-0 text-dark">Sistema Administrador de Aporte y Crédito</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <p class="mb-0">Bienvenido al Sistema</p>
                    <img src="vendor/adminlte/dist/img/logo.jpeg" alt="Logo Cooperativa" with="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
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
                title: "Ingreso Satisfactorio!",
                text: "{{ $message }}",
                timer: 1500,
                icon: "success"
            });
        </script>
    @endif
@stop
