@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
<h1 class="m-0 text-dark">Editar Asociado</h1>
@stop

@section('content')
<x-adminlte-card>
    <form method="POST" action="{{ route('asociados.update', $asociado->id) }}">
        @csrf
        @method('PUT')
        <!-- Usa PUT o PATCH según la convención de Laravel -->
        <input type="hidden" name="id" value="{{ $asociado->id }}"> <!-- Campo oculto para el ID -->
        <ul class="nav nav-tabs" id="datos-asociado-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="datos-personales-tab" data-toggle="pill" href="#datos-personales"
                    role="tab" aria-controls="datos-personales" aria-selected="true"><strong>Información
                        Personal</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="datos-economicos-tab" data-toggle="pill" href="#datos-economicos" role="tab"
                    aria-controls="datos-economicos" aria-selected="false"><strong>Actividad Económica</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="descripcion-activos-tab" data-toggle="pill" href="#descripcion-activos"
                    role="tab" aria-controls="descripcion-activos" aria-selected="false"><strong>Descripción de
                        Activos</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="conocimiento-tab" data-toggle="pill" href="#conocimiento" role="tab"
                    aria-controls="conocimiento" aria-selected="false"><strong>Conocimiento mejorado de
                        personas</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="referencia-beneficiario-tab" data-toggle="pill" href="#referencia-beneficiario"
                    role="tab" aria-controls="referencia-beneficiario" aria-selected="false"><strong>Referencias y
                        Beneficiarios</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aportes-tab" data-toggle="pill" href="#aportes" role="tab"
                    aria-controls="aportes" aria-selected="false"><strong>Aportes</strong></a>
            </li>
        </ul>
        <div class="tab-content" id="datos-asociado-tabContent">
            <div class="tab-pane fade show active" id="datos-personales" role="tabpanel"
                aria-labelledby="datos-personales-tab">
                <fieldset>
                    <div class="row">
                        @php
                        $config = ['format' => 'YYYY-MM-DD'];
                        @endphp
                        <x-adminlte-input-date name="fecha_afiliacion" label="Fecha de Afiliación" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->fecha_afiliacion }}" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="nombre" label="Nombres" placeholder="Nombres" fgroup-class="col-md-3"
                            value="{{ $asociado->nombre }}" disabled />
                        <x-adminlte-input name="primer_apellido" label="Primer Apellido" placeholder="Primer Apellido"
                            fgroup-class="col-md-2" value="{{ $asociado->primer_apellido }}" disabled />
                        <x-adminlte-input name="segundo_apellido" label="Segundo Apellido"
                            placeholder="Segundo Apellido" fgroup-class="col-md-2"
                            value="{{ $asociado->segundo_apellido }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="tipo_documento" label="Tipo" fgroup-class="col-md-1"
                            value="{{ $asociado->tipo_documento }}" disabled />
                        <x-adminlte-input name="cedula" label="Documento" placeholder="Número" fgroup-class="col-md-2"
                            value="{{ $asociado->cedula }}" disabled />
                        <x-adminlte-input-date name="fecha_expedicion" label="Fecha de Expedición" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->fecha_expedicion }}" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-select name="dpto_expedicion" id="dpto_expedicion" label="Departamento"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ $asociado->dpto_expedicion == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="lugar_expedicion" id="lugar_expedicion" label="Lugar de Expedición"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                {{ $asociado->lugar_expedicion == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-input name="nacionalidad" label="Nacionalidad" placeholder="Nacionalidad"
                            fgroup-class="col-md-2" value="{{ $asociado->nacionalidad }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input-date id="fecha_nacimiento" name="fecha_nacimiento" label="Fecha Nacimiento"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->fecha_nacimiento }}" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input id="edad" name="edad" type="number" label="Edad" placeholder="0"
                            fgroup-class="col-md-1" class="text-right" min="10" max="100" disabled
                            value="{{ $asociado->edad }}" />
                        <x-adminlte-select name="dpto_nacimiento" label="Departamento" fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ $asociado->dpto_nacimiento == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="lugar_nacimiento" id="lugar_nacimiento" label="Lugar de Nacimiento"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                {{ $asociado->lugar_nacimiento == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-input name="cedula_representante" label="Cédula Rep."
                            placeholder="Cédula Representante" fgroup-class="col-md-1"
                            value="{{ $asociado->cedula_representante }}" disabled />
                        <x-adminlte-input name="nombre_representante" label="Nombre Representante"
                            placeholder="Nombre Representante" fgroup-class="col-md-3"
                            value="{{ $asociado->nombre_representante }}" disabled />
                        <x-adminlte-input name="edad_representante" label="Edad Rep." type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" value="{{ $asociado->edad_representante }}"
                            disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="genero" label="Genero" fgroup-class="col-md-2"
                            value="{{ $asociado->genero }}" disabled />
                        <x-adminlte-input name="estado_civil" label="Estado Civil" fgroup-class="col-md-2"
                            value="{{ $asociado->estado_civil }}" disabled />
                        <x-adminlte-input name="personas_adultos" label="Adultos" type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" value="{{ $asociado->personas_adultos }}"
                            disabled />
                        <x-adminlte-input name="personas_menores" label="Menores" type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" value="{{ $asociado->personas_menores }}"
                            disabled />
                        <x-adminlte-input name="cabeza_familia" label="¿Madre cabeza de Hogar?" fgroup-class="col-md-2"
                            value="{{ $asociado->cabeza_familia }}" disabled />
                        <x-adminlte-input name="tipo_vivienda" label="Tipo de Vivienda" fgroup-class="col-md-2"
                            value="{{ $asociado->tipo_vivienda }}" disabled />
                        <x-adminlte-input name="estrato" label="Estrato" fgroup-class="col-md-1"
                            value="{{ $asociado->estrato }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="direccion" label="Dirección y Barrio"
                            placeholder="Dirección del asociado" fgroup-class="col-md-4"
                            value="{{ $asociado->direccion }}" disabled />
                        <x-adminlte-select name="dpto" label="Departamento" fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ $asociado->dpto == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="ciudad" id="ciudad" label="Municipio" fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                {{ $asociado->ciudad == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-input name="telefono" label="Teléfono" placeholder="Teléfono del asociado"
                            fgroup-class="col-md-1" value="{{ $asociado->telefono }}" disabled />
                        <x-adminlte-input name="celular" label="Celular" placeholder="Celular del asociado"
                            fgroup-class="col-md-1" value="{{ $asociado->celular }}" disabled />
                        <x-adminlte-input name="email" type="email" label="Email" placeholder="Email del asociado"
                            fgroup-class="col-md-2" value="{{ $asociado->email }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="nivel_educativo" label="Nivel Educativo" fgroup-class="col-md-2"
                            value="{{ $asociado->nivel_educativo }}" disabled />
                        <x-adminlte-input name="profesion" label="Profesión u Oficio"
                            placeholder="Profesión u Oficio del asociado" fgroup-class="col-md-3"
                            value="{{ $asociado->profesion }}" disabled />
                        <x-adminlte-input name="idiomas" label="Idiomas" placeholder="Idiomas" fgroup-class="col-md-2"
                            value="{{ $asociado->idiomas }}" disabled />
                        <x-adminlte-input name="hobbies" label="Hobbies" placeholder="Hobbies" fgroup-class="col-md-2"
                            value="{{ $asociado->hobbies }}" disabled />
                        <x-adminlte-input name="estado" label="Estado del asociado" fgroup-class="col-md-2"
                            value="{{ $asociado->estado }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="autoriza_residencia" label="¿Autoriza residencia?"
                            fgroup-class="col-md-2" value="{{ $asociado->autoriza_residencia }}" disabled />
                        <x-adminlte-input name="autoriza_trabajo" label="¿Aut. Corresp. Trabajo?"
                            fgroup-class="col-md-2" value="{{ $asociado->autoriza_trabajo }}" disabled />
                        <x-adminlte-input name="autoriza_familiar" label="¿Aut. Corresp. Familiar?"
                            fgroup-class="col-md-2" value="{{ $asociado->autoriza_familiar }}" disabled />
                        <x-adminlte-input name="autoriza_email" label="¿Aut. Corresp. Email?" fgroup-class="col-md-2"
                            value="{{ $asociado->autoriza_email }}" disabled />
                        <x-adminlte-input name="autoriza_telefono" label="¿Aut. Corresp. Teléfono?"
                            fgroup-class="col-md-2" value="{{ $asociado->autoriza_telefono }}" disabled />
                        <x-adminlte-input name="autoriza_datos" label="¿Aut. Trat. Datos?" fgroup-class="col-md-2"
                            value="{{ $asociado->autoriza_datos }}" disabled />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="datos-economicos" role="tabpanel" aria-labelledby="datos-economicos-tab">
                <fieldset>
                    <!--<legend>Datos Económicos</legend>-->
                    <div class="row">
                        <x-adminlte-input name="economicas[actividad_economica]" label="Actividad Económica"
                            fgroup-class="col-md-3" value="{{ $asociado->economicas['actividad_economica'] }}"
                            disabled />
                        <x-adminlte-input name="economicas[declara_renta]" label="¿Declara Renta?"
                            fgroup-class="col-md-2" value="{{ $asociado->economicas['declara_renta'] }}" disabled />
                        <x-adminlte-input name="economicas[codigo_ciiu]" label="Código CIIU" placeholder="Código CIIU"
                            fgroup-class="col-md-2" value="{{ $asociado->economicas['codigo_ciiu'] }}" disabled />
                        <x-adminlte-input name="economicas[descripcion_ciiu]" label="Descripción CIIU"
                            placeholder="Descripción CIIU" fgroup-class="col-md-5"
                            value="{{ $asociado->economicas['descripcion_ciiu'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[empresa]" label="Empresa" placeholder="Empresa"
                            fgroup-class="col-md-4" value="{{ $asociado->economicas['empresa'] }}" disabled />
                        <x-adminlte-input name="economicas[tipo_empresa]" label="Tipo de Empresa"
                            fgroup-class="col-md-2" value="{{ $asociado->economicas['tipo_empresa'] }}" disabled />
                        <x-adminlte-input name="economicas[cargo]" label="Cargo" placeholder="Cargo"
                            fgroup-class="col-md-3" value="{{ $asociado->economicas['cargo'] }}" disabled />
                        <x-adminlte-input name="economicas[ocupacion]" label="Ocupación" placeholder="Ocupación"
                            fgroup-class="col-md-3" value="{{ $asociado->economicas['ocupacion'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[tipo_contrato]" label="Tipo Contrato" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['tipo_contrato'] }}" disabled />
                        <x-adminlte-input name="economicas[tiempo_actividad]" label="Tiempo"
                            placeholder="Tiempo Actividad" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['tiempo_actividad'] }}" disabled />
                        <x-adminlte-input name="economicas[jornada]" label="Jornada" placeholder="Jornada"
                            fgroup-class="col-md-1" value="{{ $asociado->economicas['jornada'] }}" disabled />
                        <x-adminlte-input name="economicas[telefono_empresa]" label="Teléfono"
                            placeholder="Teléfono Empresa" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['telefono_empresa'] }}" disabled />
                        <x-adminlte-input name="economicas[extension]" label="Extensión" placeholder="Extensión"
                            fgroup-class="col-md-1" value="{{ $asociado->economicas['extension'] }}" disabled />
                        <x-adminlte-input name="economicas[direccion_empresa]" label="Dirección Empresa"
                            placeholder="Dirección Empresa" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['direccion_empresa'] }}" disabled />

                        <x-adminlte-select name="economicas[dpto_empresa]" label="Departamento" fgroup-class="col-md-2"
                            disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ $asociado->economicas['dpto_empresa'] == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre ?? '' }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="economicas[ciudad_empresa]" id="ciudad" label="Municipio"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                {{ $asociado->economicas['ciudad_empresa'] == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre ?? '' }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <x-adminlte-input name="economicas[actividad_secundaria]" label="Actividad Secundaria"
                                placeholder="Actividad Secundaria"
                                value="{{ $asociado->economicas['actividad_secundaria'] }}" disabled />
                        </div>
                        <div class="col-md-3">
                            <x-adminlte-input name="economicas[direccion_secundaria]" label="Dirección"
                                placeholder="Dirección" value="{{ $asociado->economicas['direccion_secundaria'] }}"
                                disabled />
                        </div>
                        <x-adminlte-select name="economicas[dpto_secundaria]" label="Departamento"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}"
                                {{ $asociado->economicas['dpto_secundaria'] == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="economicas[ciudad_secundaria]" id="ciudad" label="Municipio"
                            fgroup-class="col-md-2" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->id }}"
                                {{ $asociado->economicas['ciudad_secundaria'] == $municipio->id ? 'selected' : '' }}>
                                {{ $municipio->nombre }}
                            </option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[telefono_secundaria]" label="Teléfono" placeholder="Teléfono"
                            fgroup-class="col-md-1" value="{{ $asociado->economicas['telefono_secundaria'] }}"
                            disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[descripcion_secundaria]"
                            label="¿Qué tipos de productos y/o servicios comercializa?"
                            placeholder="Productos y/o servicios comercializa" fgroup-class="col-md-12"
                            value="{{ $asociado->economicas['descripcion_secundaria'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[pensionado]" label="¿Pensionado?" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['pensionado'] }}" disabled />
                        <x-adminlte-input name="economicas[entidad_pension]" label="Entidad de Pensión"
                            placeholder="Entidad de Pensión" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['entidad_pension'] }}" disabled />
                        <x-adminlte-input name="economicas[valor_pension]" label="Valor de la Pensión" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['valor_pension'] }}" disabled />
                        <x-adminlte-input-date name="economicas[fecha_pension]" label="Fecha de Pensión"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['fecha_pension'] }}" disabled />
                        <x-adminlte-input name="economicas[resolucion_pension]" label="Resolución de Pensión"
                            placeholder="Resolución de Pensión" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['resolucion_pension'] }}" disabled />
                        <x-adminlte-input-date name="economicas[fecha_corte]" label="Fecha de Corte" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['fecha_corte'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[ingresos_mensuales]" label="Ing. Mensual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['ingresos_mensuales'] }}" disabled />
                        <x-adminlte-input name="economicas[ingresos_anuales]" label="Ing. Anual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['ingresos_anuales'] }}" disabled />
                        <x-adminlte-input name="economicas[egresos_mensuales]" label="Egr. Mensual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['egresos_mensuales'] }}" disabled />
                        <x-adminlte-input name="economicas[egresos_anuales]" label="Egr. Anual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1"
                            value="{{ $asociado->economicas['egresos_anuales'] }}" disabled />
                        <x-adminlte-input name="economicas[total_activos]" label="Total Activos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['total_activos'] }}" disabled />
                        <x-adminlte-input name="economicas[total_pasivos]" label="Total Pasivos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['total_pasivos'] }}" disabled />
                        <x-adminlte-input name="economicas[otros_ingresos]" label="Otros Ingresos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['otros_ingresos'] }}" disabled />
                        <x-adminlte-input name="economicas[descripcion_ingresos]" label="Descripción Ingresos"
                            placeholder="Descripción Ingresos" fgroup-class="col-md-2"
                            value="{{ $asociado->economicas['descripcion_ingresos'] }}" disabled />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="descripcion-activos" role="tabpanel"
                aria-labelledby="descripcion-activos-tab">
                <fieldset>
                    <!--<legend>Datos Activos</legend>-->
                    <div class="row">
                        <label for="">Bienes Inmuebles (Casas, Apartamentos, Lotes, Fincas) </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_primer_bien]" label="Tipo" placeholder="Tipo"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['tipo_primer_bien'] }}" disabled />
                        <x-adminlte-input name="activos[direccion_primer_bien]" label="Dirección"
                            placeholder="Dirección" fgroup-class="col-md-4"
                            value="{{ $asociado->activos['direccion_primer_bien'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[valor_primer_bien]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_primer_bien'] }}" disabled />
                        <x-adminlte-input name="activos[hipoteca_primer_bien]" label="Hipotecado a:"
                            placeholder="Hipotecado a" fgroup-class="col-md-2"
                            value="{{ $asociado->activos['hipoteca_primer_bien'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[saldo_primer_bien]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_primer_bien'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_segundo_bien]" placeholder="Tipo" fgroup-class="col-md-2"
                            value="{{ $asociado->activos['tipo_segundo_bien'] }}" disabled />
                        <x-adminlte-input name="activos[direccion_segundo_bien]" placeholder="Dirección"
                            fgroup-class="col-md-4" value="{{ $asociado->activos['direccion_segundo_bien'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[valor_segundo_bien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_segundo_bien'] }}" disabled />
                        <x-adminlte-input name="activos[hipoteca_segundo_bien]" placeholder="Hipotecado a:"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['hipoteca_segundo_bien'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_bien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_segundo_bien'] }}" disabled />
                    </div>
                    <div class="row">
                        <label for="">Vehículos (Clase:Moto, Auto, Campero; camioneta) (Marca / Referencia)
                        </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_primer_vehiculo]" label="Vehículo" placeholder="Clase"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['tipo_primer_vehiculo'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[valor_primer_vehiculo]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_primer_vehiculo'] }}" disabled />
                        <x-adminlte-input name="activos[marca_primer_vehiculo]" label="Marca / Modelo"
                            placeholder="Marca / Modelo" fgroup-class="col-md-2"
                            value="{{ $asociado->activos['marca_primer_vehiculo'] }}" disabled />
                        <x-adminlte-input name="activos[placa_primer_vehiculo]" label="Placa" placeholder="Placa"
                            fgroup-class="col-md-1" value="{{ $asociado->activos['placa_primer_vehiculo'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[saldo_primer_vehiculo]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_primer_vehiculo'] }}" disabled />
                        <x-adminlte-input name="activos[prenda_primer_vehiculo]" label="Prenda a favor"
                            placeholder="Prenda" fgroup-class="col-md-2"
                            value="{{ $asociado->activos['prenda_primer_vehiculo'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_segundo_vehiculo]" placeholder="Clase"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['tipo_segundo_vehiculo'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[valor_segundo_vehiculo]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_segundo_vehiculo'] }}" disabled />
                        <x-adminlte-input name="activos[marca_segundo_vehiculo]" placeholder="Marca / Modelo"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['marca_segundo_vehiculo'] }}"
                            disabled />
                        <x-adminlte-input name="activos[placa_segundo_vehiculo]" placeholder="Placa"
                            fgroup-class="col-md-1" value="{{ $asociado->activos['placa_segundo_vehiculo'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_vehiculo]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_segundo_vehiculo'] }}" disabled />
                        <x-adminlte-input name="activos[prenda_segundo_vehiculo]" placeholder="Prenda"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['prenda_segundo_vehiculo'] }}"
                            disabled />
                    </div>
                    <div class="row">
                        <label for="">Otros Bienes (Describir inversiones, acciones, bonos, maquinaria,
                            semovientes)
                        </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[descripcion_primer_otrobien]" label="Descripción"
                            placeholder="Descripción" fgroup-class="col-md-6"
                            value="{{ $asociado->activos['descripcion_primer_otrobien'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[valor_primer_otrobien]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_primer_otrobien'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[saldo_primer_otrobien]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_primer_otrobien'] }}" disabled />
                        <x-adminlte-input name="activos[prenda_primer_otrobien]" label="Prenda a favor"
                            placeholder="Prenda a favor" fgroup-class="col-md-2"
                            value="{{ $asociado->activos['prenda_primer_otrobien'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[descripcion_segundo_otrobien]" placeholder="Descripción"
                            fgroup-class="col-md-6" value="{{ $asociado->activos['descripcion_segundo_otrobien'] }}"
                            disabled />
                        <x-adminlte-input type="number" name="activos[valor_segundo_otrobien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['valor_segundo_otrobien'] }}" disabled />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_otrobien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->activos['saldo_segundo_otrobien'] }}" disabled />
                        <x-adminlte-input name="activos[prenda_segundo_otrobien]" placeholder="Prenda a favor"
                            fgroup-class="col-md-2" value="{{ $asociado->activos['prenda_segundo_otrobien'] }}"
                            disabled />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="conocimiento" role="tabpanel" aria-labelledby="conocimiento-tab">
                <fieldset>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[politica_expuesta]" label="¿Política Expuesta?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['politica_expuesta'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[indique_politica_expuesta]" label="Indique"
                            placeholder="Indique Política Expuesta" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_politica_expuesta'] }}" disabled />
                        <x-adminlte-input name="conocimientos[representa_ong]" label="¿Representa ONG?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['representa_ong'] }}" disabled />
                        <x-adminlte-input name="conocimientos[indique_representa_ong]" label="Indique"
                            placeholder="Indique Representa ONG" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_representa_ong'] }}" disabled />
                        <x-adminlte-input name="conocimientos[persona_publica]" label="¿Persona Pública?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['persona_publica'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[indique_persona_publica]" label="Indique"
                            placeholder="Indique Persona Pública" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_persona_publica'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[movimiento_politico]" label="¿Movimiento Político?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['movimiento_politico'] }}"
                            disabled />

                        <x-adminlte-input name="conocimientos[indique_movimiento_politico]" label="Indique"
                            placeholder="Indique Movimiento Político" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_movimiento_politico'] }}" disabled />
                        <x-adminlte-input name="conocimientos[administra_publico]" label="¿Administra Público?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['administra_publico'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[indique_administra_publico]" label="Indique"
                            placeholder="Indique Administra Público" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_administra_publico'] }}" disabled />
                        <x-adminlte-input name="conocimientos[tributa_otro_pais]" label="¿Tributa Otro País?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['tributa_otro_pais'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[indique_tributa_otro_pais]" label="Indique"
                            placeholder="Indique Tributa Otro País" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['indique_tributa_otro_pais'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[vinculo_pep]" label="¿Vínculo PEP?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['vinculo_pep'] }}" disabled />
                        <x-adminlte-input name="conocimientos[indique_vinculo_pep]" label="Indique"
                            placeholder="Indique Vínculo PEP" fgroup-class="col-md-5"
                            value="{{ $asociado->conocimientos['indique_vinculo_pep'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[vinculo1]" label="Vínculo" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['vinculo1'] }}" disabled />
                        <x-adminlte-input name="conocimientos[nombre_vinculo1]" label="Nombre" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['nombre_vinculo1'] }}" disabled />
                        <x-adminlte-input name="conocimientos[tipodoc_vinculo1]" label="Tipo de Id."
                            fgroup-class="col-md-1" value="{{ $asociado->conocimientos['tipodoc_vinculo1'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[numero_vinculo1]" label="Número" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['numero_vinculo1'] }}" disabled />
                        <x-adminlte-input name="conocimientos[nacionalidad_vinculo1]" label="Nacionalidad"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['nacionalidad_vinculo1'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[entidad_vinculo1]" label="Entidad" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['entidad_vinculo1'] }}" disabled />
                        <x-adminlte-input name="conocimientos[cargo_vinculo1]" label="Cargo" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['cargo_vinculo1'] }}" disabled />
                        <x-adminlte-input-date name="conocimientos[fecha_vinculo1]" label="Fecha de Vinculo"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['fecha_vinculo1'] }}" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[vinculo2]" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[nombre_vinculo2]" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['nombre_vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[tipodoc_vinculo2]" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['tipodoc_vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[numero_vinculo2]" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['numero_vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[nacionalidad_vinculo2]" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['nacionalidad_vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[entidad_vinculo2]" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['entidad_vinculo2'] }}" disabled />
                        <x-adminlte-input name="conocimientos[cargo_vinculo2]" fgroup-class="col-md-1"
                            value="{{ $asociado->conocimientos['cargo_vinculo2'] }}" disabled />
                        <x-adminlte-input-date name="conocimientos[fecha_vinculo2]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['fecha_vinculo2'] }}" disabled>
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[operaciones_extranjeras]"
                            label="¿Operaciones Extranjeras?" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['operaciones_extranjeras'] }}" disabled />
                        <x-adminlte-input name="conocimientos[tipo_operaciones]" label="Tipo de Operaciones"
                            placeholder="Tipo de Operaciones" fgroup-class="col-md-4"
                            value="{{ $asociado->conocimientos['tipo_operaciones'] }}" disabled />
                        <x-adminlte-input name="conocimientos[cuentas_extranjeras]" label="¿Cuentas Extranjeras?"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['cuentas_extranjeras'] }}"
                            disabled />
                        <x-adminlte-input name="conocimientos[numero_cuenta]" label="Número de Cuenta"
                            placeholder="Número de Cuenta" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['numero_cuenta'] }}" disabled />
                        <x-adminlte-input name="conocimientos[entidad_cuenta]" label="Entidad de Cuenta"
                            placeholder="Entidad de Cuenta" fgroup-class="col-md-2"
                            value="{{ $asociado->conocimientos['entidad_cuenta'] }}" disabled />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[moneda]" label="Moneda" placeholder="Moneda"
                            fgroup-class="col-md-2" value="{{ $asociado->conocimientos['moneda'] }}" disabled />
                        <x-adminlte-input type="number" name="monto" label="Monto Promedio" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" value="{{ $asociado->monto }}" disabled />
                        <x-adminlte-input name="conocimientos[ciudad_operaciones]" label="Ciudad de Operaciones"
                            placeholder="Ciudad de Operaciones" fgroup-class="col-md-3"
                            value="{{ $asociado->conocimientos['ciudad_operaciones'] }}" disabled />
                        <x-adminlte-input name="conocimientos[pais]" label="País" placeholder="País"
                            fgroup-class="col-md-3" value="{{ $asociado->conocimientos['pais'] }}" disabled />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="referencia-beneficiario" role="tabpanel"
                aria-labelledby="referencia-beneficiario-tab">
                <fieldset>
                    <div class="row">
                        <label for="">Referencias Personales / Comerciales </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciap_nombre1]" label="Nombre" placeholder="Nombre"
                            fgroup-class="col-md-3" value="{{ $asociado->referencias['referenciap_nombre1'] }}" />
                        <x-adminlte-input name="referencias[referenciap_relacion1]" label="Relación"
                            placeholder="Relación" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['referenciap_relacion1'] }}" />
                        <x-adminlte-input name="referencias[referenciap_direccion1]" label="Dirección"
                            placeholder="Dirección" fgroup-class="col-md-3"
                            value="{{ $asociado->referencias['referenciap_direccion1'] }}" />
                        <x-adminlte-input name="referencias[referenciap_ciudad1]" label="Ciudad" placeholder="Ciudad"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciap_ciudad1'] }}" />
                        <x-adminlte-input name="referencias[referenciap_telefono1]" label="Teléfono/Celular"
                            placeholder="Teléfono" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->referencias['referenciap_telefono1'] }}" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciap_nombre2]" placeholder="Nombre"
                            fgroup-class="col-md-3" value="{{ $asociado->referencias['referenciap_nombre2'] }}" />
                        <x-adminlte-input name="referencias[referenciap_relacion2]" placeholder="Relación"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciap_relacion2'] }}" />
                        <x-adminlte-input name="referencias[referenciap_direccion2]" placeholder="Dirección"
                            fgroup-class="col-md-3" value="{{ $asociado->referencias['referenciap_direccion2'] }}" />
                        <x-adminlte-input name="referencias[referenciap_ciudad2]" placeholder="Ciudad"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciap_ciudad2'] }}" />
                        <x-adminlte-input name="referencias[referenciap_telefono2]" placeholder="Teléfono"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->referencias['referenciap_telefono2'] }}" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciac_entidad1]" label="Entidad" placeholder="Entidad"
                            fgroup-class="col-md-3" value="{{ $asociado->referencias['referenciac_entidad1'] }}" />
                        <x-adminlte-input name="referencias[referenciac_tipo1]" label="Tipo de producto"
                            placeholder="Tipo de producto" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['referenciac_tipo1'] }}" />
                        <x-adminlte-input name="referencias[referenciac_producto1]" label="No. Producto"
                            placeholder="Producto" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['referenciac_producto1'] }}" />
                        <x-adminlte-input name="referencias[referenciac_ciudad1]" label="Ciudad" placeholder="Ciudad"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciac_ciudad1'] }}" />
                        <x-adminlte-input name="referencias[referenciac_telefono1]" label="Teléfono/Celular"
                            placeholder="Teléfono" fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->referencias['referenciac_telefono1'] }}" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciac_entidad2]" placeholder="Entidad"
                            fgroup-class="col-md-3" value="{{ $asociado->referencias['referenciac_entidad2'] }}" />
                        <x-adminlte-input name="referencias[referenciac_tipo2]" placeholder="Tipo de producto"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciac_tipo2'] }}" />
                        <x-adminlte-input name="referencias[referenciac_producto2]" placeholder="Producto"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciac_producto2'] }}" />
                        <x-adminlte-input name="referencias[referenciac_ciudad2]" placeholder="Ciudad"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['referenciac_ciudad2'] }}" />
                        <x-adminlte-input name="referencias[referenciac_telefono2]" placeholder="Teléfono"
                            fgroup-class="col-md-2" class="text-right"
                            value="{{ $asociado->referencias['referenciac_telefono2'] }}" />
                    </div>
                    <div class="row">
                        <label for="">Beneficiarios en caso de Fallecimiento</label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre1]" label="Nombre" placeholder="Nombre"
                            fgroup-class="col-md-4" value="{{ $asociado->referencias['beneficiario_nombre1'] }}" />
                        <x-adminlte-input name="referencias[beneficiario_documento1]" label="Documento"
                            placeholder="Documento" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['beneficiario_documento1'] }}" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje1]" label="Porcentaje"
                            placeholder="0.0" fgroup-class="col-md-1 text-right" min="0" max="100" step="0.1"
                            value="{{ $asociado->referencias['beneficiario_porcentaje1'] }}" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento1]" label="Fecha de Nacimiento"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['beneficiario_nacimiento1'] }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                            <x-slot name="inputPrepend">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco1]" label="Parentesco"
                            placeholder="Parentesco" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['beneficiario_parentesco1'] }}" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre2]" placeholder="Nombre"
                            fgroup-class="col-md-4" value="{{ $asociado->referencias['beneficiario_nombre2'] }}" />
                        <x-adminlte-input name="referencias[beneficiario_documento2]" placeholder="Documento"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['beneficiario_documento2'] }}" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje2]" placeholder="0.0"
                            fgroup-class="col-md-1 text-right" min="0" max="100" step="0.1"
                            value="{{ $asociado->referencias['beneficiario_porcentaje2'] }}" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento2]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['beneficiario_nacimiento2'] }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                            <x-slot name="inputPrepend">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco2]" placeholder="Parentesco"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['beneficiario_parentesco2'] }}" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre3]" placeholder="Nombre"
                            fgroup-class="col-md-4" value="{{ $asociado->referencias['beneficiario_nombre3'] }}" />
                        <x-adminlte-input name="referencias[beneficiario_documento3]" placeholder="Documento"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['beneficiario_documento3'] }}" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje3]" placeholder="0.0"
                            fgroup-class="col-md-1 text-right" min="0" max="100" step="0.1"
                            value="{{ $asociado->referencias['beneficiario_porcentaje3'] }}" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento3]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2"
                            value="{{ $asociado->referencias['beneficiario_nacimiento3'] }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                            <x-slot name="inputPrepend">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco3]" placeholder="Parentesco"
                            fgroup-class="col-md-2" value="{{ $asociado->referencias['beneficiario_parentesco3'] }}" />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="aportes" role="tabpanel" aria-labelledby="aportes-tab">
                <fieldset>
                    @csrf
                    <div class="row">
                        @foreach ($lineasAportes as $index => $lineaAporte)
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valor_aporte_{{ $lineaAporte->id }}">Valor para
                                    {{ $lineaAporte->nombre }}:</label>
                                @php
                                $aporte = $asociado->aportes->where('lineaaporte_id', $lineaAporte->id)->first();
                                $valorAporte = $aporte ? $aporte->valor_aporte : '';
                                @endphp
                                <input type="number" class="form-control text-right"
                                    id="valor_aporte_{{ $lineaAporte->id }}"
                                    name="aportes[{{ $lineaAporte->id }}][valor_aporte]" placeholder="0"
                                    value="{{ $valorAporte }}">
                                <input type="hidden" name="aportes[{{ $lineaAporte->id }}][linea_aporte_id]"
                                    value="{{ $lineaAporte->id }}">
                            </div>
                        </div>
                        @if (($index + 1) % 3 == 0)
                    </div>
                    <div class="row">
                        @endif
                        @endforeach
                    </div>
                </fieldset>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <a class="btn btn-secondary" href="{{ route('asociados.index') }}" role="button"><i
                        class="fa fa-undo"></i> Regresar</a>
            </div>
        </div>

    </form>
</x-adminlte-card>
@stop