@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
<h1 class="m-0 text-dark">Detalles del Rol</h1>
@stop

@section('content')
<x-adminlte-card>
    <div class="row">
        <div class="col-md-5">
            <x-adminlte-input name="name" label="Nombre Rol" placeholder="Nombre Rol" disabled :value="$role->name" />
        </div>
        <div class="col-md-9"></div> <!-- Columna vacía para ocupar espacio -->
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <label for="checkPermisos" class="form-label">Permisos para este rol:</label>
            <div class="row">
                @foreach ($permission as $p)
                <div class="col-md-3">
                    <div class="form-check">
                        <input name="permission[]" class="form-check-input" type="checkbox" value="{{ $p->id }}"
                            id="{{ $p->id }}" {{ in_array($p->id, $rolePermissions) ? 'checked' : '' }} disabled>
                        <label class="form-check-label" for="{{ $p->id }}">
                            {{ $p->name }}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <a class="btn btn-secondary" href="{{ route('roles.index') }}" role="button"><i class="fa fa-undo"></i>
                Regresar</a>
        </div>
    </div>
</x-adminlte-card>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@stop

@section('footer')
<footer>
    <p><img src="{{ asset('vendor/adminlte/dist/img/fralgom-foot.png') }}" alt="Logo Fralgom"> © {{ date('Y') }} Fralgóm
        Ingeniería Informática. Todos los derechos reservados.</p>
</footer>
@stop