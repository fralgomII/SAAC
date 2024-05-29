@extends('adminlte::page')

@section('title', 'SAAC')

@section('content_header')
<h1 class="m-0 text-dark">Registrar Asociado</h1>
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content')
<x-adminlte-card>
    <form method="POST" action="{{ route('asociados.store') }}" enctype="multipart/form-data">
        @csrf
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
                    <!--<legend>Datos Básicos</legend>-->
                    <div class="row">
                        @php
                        $config = ['format' => 'YYYY-MM-DD'];
                        @endphp
                        <x-adminlte-input-date name="fecha_afiliacion" label="Fecha de Afiliación" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="nombre" label="Nombres" placeholder="Nombres" fgroup-class="col-md-3" />
                        <x-adminlte-input name="primer_apellido" label="Primer Apellido" placeholder="Primer Apellido"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="segundo_apellido" label="Segundo Apellido"
                            placeholder="Segundo Apellido" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="tipo_documento" label="Tipo" fgroup-class="col-md-1">
                            <div class="input-group-text bg-gradient-info">
                                <i class="fas fa-list"></i>
                            </div>
                            <option>C.C.</option>
                            <option>T.I.</option>
                            <option>C.E.</option>
                            <option>PAS</option>
                            <option>NUIP</option>
                            <option>CD</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="cedula" label="Documento" placeholder="Número"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input-date name="fecha_expedicion" label="Fecha de Expedición" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-select name="dpto_expedicion" id="dpto_expedicion" label="Departamento"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="">Seleccionar Departamento</option>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="lugar_expedicion" id="lugar_expedicion" label="Lugar de Expedición"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <!-- Opciones de municipios -->
                        </x-adminlte-select>
                        <x-adminlte-input name="nacionalidad" label="Nacionalidad" placeholder="Nacionalidad"
                            fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-input-date id="fecha_nacimiento" name="fecha_nacimiento" label="Fecha Nacimiento"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input id="edad" name="edad" type="number" label="Edad" placeholder="0"
                            fgroup-class="col-md-1" class="text-right" min="10" max="100" readonly />
                        <x-adminlte-select name="dpto_nacimiento" label="Departamento" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="">Seleccionar Departamento</option>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="lugar_nacimiento" id="lugar_nacimiento" label="Lugar de Nacimiento"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <!-- Opciones de municipios -->
                        </x-adminlte-select>
                        <x-adminlte-input name="cedula_representante" label="Cédula Rep."
                            placeholder="Cédula Representante" fgroup-class="col-md-1" />
                        <x-adminlte-input name="nombre_representante" label="Nombre Representante"
                            placeholder="Nombre Representante" fgroup-class="col-md-3" />
                        <x-adminlte-input name="edad_representante" label="Edad Rep." type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="genero" label="Genero" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Intersexual</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="estado_civil" label="Estado Civil" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Soltero(a)</option>
                            <option>Casado(a)</option>
                            <option>Divorciado(a)</option>
                            <option>Unión Libre</option>
                            <option>Viudo(a)</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="personas_adultos" label="Adultos" type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-input name="personas_menores" label="Menores" type="number" placeholder="0"
                            class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-select name="cabeza_familia" label="¿Madre cabeza de Hogar?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="tipo_vivienda" label="Tipo de Vivienda" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Propia</option>
                            <option>Arrendada</option>
                            <option>Familiar</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="estrato" label="Estrato" fgroup-class="col-md-1">
                            <div class="input-group-text bg-gradient-info">
                                <i class="fas fa-list"></i>
                            </div>
                            @for ($i = 1; $i <= 6; $i++) <option>{{ $i }}</option>
                                @endfor
                        </x-adminlte-select>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="direccion" label="Dirección y Barrio"
                            placeholder="Dirección del asociado" fgroup-class="col-md-4" />
                        <x-adminlte-select name="dpto" label="Departamento" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="">Seleccionar Departamento</option>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="ciudad" id="ciudad" label="Municipio" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <!-- Opciones de municipios -->
                        </x-adminlte-select>
                        <x-adminlte-input name="telefono" label="Teléfono" placeholder="Teléfono del asociado"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="celular" label="Celular" placeholder="Celular del asociado"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="email" type="email" label="Email" placeholder="Email del asociado"
                            fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="nivel_educativo" label="Nivel Educativo" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Primaria</option>
                            <option>Bachillerato</option>
                            <option>Técnico</option>
                            <option>Tecnólogo</option>
                            <option>Universitario</option>
                            <option>Especialista</option>
                            <option>Magister</option>
                            <option>Doctor</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="profesion" label="Profesión u Oficio"
                            placeholder="Profesión u Oficio del asociado" fgroup-class="col-md-3" />
                        <x-adminlte-input name="idiomas" label="Idiomas" placeholder="Idiomas"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="hobbies" label="Hobbies" placeholder="Hobbies"
                            fgroup-class="col-md-2" />
                        <x-adminlte-select name="estado" label="Estado del asociado" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Activo</option>
                            <option>Retirado</option>
                            <option>Suspendido</option>
                        </x-adminlte-select>
                    </div>
                    <div class="row">
                        <x-adminlte-select name="autoriza_residencia" label="¿Autoriza residencia?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="autoriza_trabajo" label="¿Aut. Corresp. Trabajo?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="autoriza_familiar" label="¿Aut. Corresp. Familiar?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="autoriza_email" label="¿Aut. Corresp. Email?" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="autoriza_telefono" label="¿Aut. Corresp. Teléfono?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="autoriza_datos" label="¿Aut. Trat. Datos?" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="datos-economicos" role="tabpanel" aria-labelledby="datos-economicos-tab">
                <fieldset>
                    <!--<legend>Datos Económicos</legend>-->
                    <div class="row">
                        <x-adminlte-select name="economicas[actividad_economica]" label="Actividad Económica"
                            fgroup-class="col-md-3">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Asalariado</option>
                            <option>Independiente</option>
                            <option>Comerciante</option>
                            <option>Estudiante</option>
                            <option>Hogar</option>
                            <option>Inversionista</option>
                            <option>Pensionado</option>
                            <option>Rentista</option>
                            <option>Socio</option>
                            <option>Empleado público</option>
                        </x-adminlte-select>
                        <x-adminlte-select name="economicas[declara_renta]" label="¿Declara Renta?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[codigo_ciiu]" label="Código CIIU" placeholder="Código CIIU"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="economicas[descripcion_ciiu]" label="Descripción CIIU"
                            placeholder="Descripción CIIU" fgroup-class="col-md-5" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[empresa]" label="Empresa" placeholder="Empresa"
                            fgroup-class="col-md-4" />
                        <x-adminlte-select name="economicas[tipo_empresa]" label="Tipo de Empresa"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Pública</option>
                            <option>Privada</option>
                            <option>Mixta</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[cargo]" label="Cargo" placeholder="Cargo"
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="economicas[ocupacion]" label="Ocupación" placeholder="Ocupación"
                            fgroup-class="col-md-3" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="economicas[tipo_contrato]" label="Tipo Contrato"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option>Indefinido</option>
                            <option>Termino Fijo</option>
                            <option>Prestación de servicios</option>
                            <option>Obra / Labor</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[tiempo_actividad]" label="Tiempo"
                            placeholder="Tiempo Actividad" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[jornada]" label="Jornada" placeholder="Jornada"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[telefono_empresa]" label="Teléfono"
                            placeholder="Teléfono Empresa" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[extension]" label="Extensión" placeholder="Extensión"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[direccion_empresa]" label="Dirección Empresa"
                            placeholder="Dirección Empresa" fgroup-class="col-md-2" />
                        <x-adminlte-select name="economicas[dpto_empresa]" id="dpto_empresa" label="Departamento"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="">Seleccionar Departamento</option>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="economicas[ciudad_empresa]" id="ciudad_empresa" label="Ciudad"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <!-- Opciones de municipios -->
                        </x-adminlte-select>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <x-adminlte-input name="economicas[actividad_secundaria]" label="Actividad Secundaria"
                                placeholder="Actividad Secundaria" />
                        </div>
                        <div class="col-md-3">
                            <x-adminlte-input name="economicas[direccion_secundaria]" label="Dirección"
                                placeholder="Dirección" />
                        </div>
                        <x-adminlte-select name="economicas[dpto_secundaria]" id="dpto_secundaria" label="Departamento"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="">Seleccionar Departamento</option>
                            @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                        <x-adminlte-select name="economicas[ciudad_secundaria]" id="ciudad_secundaria" label="Ciudad"
                            fgroup-class="col-md-2">
                            <!-- Opciones de municipios -->
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[telefono_secundaria]" label="Teléfono" placeholder="Teléfono"
                            fgroup-class="col-md-1" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[descripcion_secundaria]"
                            label="¿Qué tipos de productos y/o servicios comercializa?"
                            placeholder="Productos y/o servicios comercializa" fgroup-class="col-md-12" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="economicas[pensionado]" label="¿Pensionado?" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="economicas[entidad_pension]" label="Entidad de Pensión"
                            placeholder="Entidad de Pensión" fgroup-class="col-md-2" />
                        <x-adminlte-input name="economicas[valor_pension]" label="Valor de la Pensión" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2" />
                        <x-adminlte-input-date name="economicas[fecha_pension]" label="Fecha de Pensión"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="economicas[resolucion_pension]" label="Resolución de Pensión"
                            placeholder="Resolución de Pensión" fgroup-class="col-md-2" />
                        <x-adminlte-input-date name="economicas[fecha_corte]" label="Fecha de Corte" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2 ">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="economicas[ingresos_mensuales]" label="Ing. Mensual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[ingresos_anuales]" label="Ing. Anual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[egresos_mensuales]" label="Egr. Mensual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[egresos_anuales]" label="Egr. Anual" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-1" />
                        <x-adminlte-input name="economicas[total_activos]" label="Total Activos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2" />
                        <x-adminlte-input name="economicas[total_pasivos]" label="Total Pasivos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2" />
                        <x-adminlte-input name="economicas[otros_ingresos]" label="Otros Ingresos" type="number"
                            placeholder="0" class="text-right" fgroup-class="col-md-2" />
                        <x-adminlte-input name="economicas[descripcion_ingresos]" label="Descripción Ingresos"
                            placeholder="Descripción Ingresos" fgroup-class="col-md-2" />
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
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="activos[direccion_primer_bien]" label="Dirección"
                            placeholder="Dirección" fgroup-class="col-md-4" />
                        <x-adminlte-input type="number" name="activos[valor_primer_bien]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[hipoteca_primer_bien]" label="Hipotecado a:"
                            placeholder="Hipotecado a" fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="activos[saldo_primer_bien]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_segundo_bien]" placeholder="Tipo"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="activos[direccion_segundo_bien]" placeholder="Dirección"
                            fgroup-class="col-md-4" />
                        <x-adminlte-input type="number" name="activos[valor_segundo_bien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[hipoteca_segundo_bien]" placeholder="Hipotecado a:"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_bien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <label for="">Vehículos (Clase:Moto, Auto, Campero; camioneta) (Marca / Referencia)
                        </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_primer_vehiculo]" label="Vehículo" placeholder="Clase"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="activos[valor_primer_vehiculo]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[marca_primer_vehiculo]" label="Marca / Modelo"
                            placeholder="Marca / Modelo" fgroup-class="col-md-2" />
                        <x-adminlte-input name="activos[placa_primer_vehiculo]" label="Placa" placeholder="Placa"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input type="number" name="activos[saldo_primer_vehiculo]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[prenda_primer_vehiculo]" label="Prenda a favor"
                            placeholder="Prenda" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[tipo_segundo_vehiculo]" placeholder="Clase"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="activos[valor_segundo_vehiculo]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[marca_segundo_vehiculo]" placeholder="Marca / Modelo"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="activos[placa_segundo_vehiculo]" placeholder="Placa"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_vehiculo]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[prenda_segundo_vehiculo]" placeholder="Prenda"
                            fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <label for="">Otros Bienes (Describir inversiones, acciones, bonos, maquinaria,
                            semovientes)
                        </label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[descripcion_primer_otrobien]" label="Descripción"
                            placeholder="Descripción" fgroup-class="col-md-6" />
                        <x-adminlte-input type="number" name="activos[valor_primer_otrobien]" label="Valor Comercial"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input type="number" name="activos[saldo_primer_otrobien]" label="Saldo del crédito"
                            placeholder="0" fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[prenda_primer_otrobien]" label="Prenda a favor"
                            placeholder="Prenda a favor" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="activos[descripcion_segundo_otrobien]" placeholder="Descripción"
                            fgroup-class="col-md-6" />
                        <x-adminlte-input type="number" name="activos[valor_segundo_otrobien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input type="number" name="activos[saldo_segundo_otrobien]" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="activos[prenda_segundo_otrobien]" placeholder="Prenda a favor"
                            fgroup-class="col-md-2" />
                    </div>
                </fieldset>
            </div>

            <div class="tab-pane fade" id="conocimiento" role="tabpanel" aria-labelledby="conocimiento-tab">
                <fieldset>
                    <div class="row">
                        <x-adminlte-select name="conocimientos[politica_expuesta]" label="¿Política Expuesta?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_politica_expuesta]" label="Indique"
                            placeholder="Indique Política Expuesta" fgroup-class="col-md-2" />
                        <x-adminlte-select name="conocimientos[representa_ong]" label="¿Representa ONG?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_representa_ong]" label="Indique"
                            placeholder="Indique Representa ONG" fgroup-class="col-md-2" />
                        <x-adminlte-select name="conocimientos[persona_publica]" label="¿Persona Pública?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_persona_publica]" label="Indique"
                            placeholder="Indique Persona Pública" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="conocimientos[movimiento_politico]" label="¿Movimiento Político?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_movimiento_politico]" label="Indique"
                            placeholder="Indique Movimiento Político" fgroup-class="col-md-2" />
                        <x-adminlte-select name="conocimientos[administra_publico]" label="¿Administra Público?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_administra_publico]" label="Indique"
                            placeholder="Indique Administra Público" fgroup-class="col-md-2" />
                        <x-adminlte-select name="conocimientos[tributa_otro_pais]" label="¿Tributa Otro País?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_tributa_otro_pai]s" label="Indique"
                            placeholder="Indique Tributa Otro País" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-select name="conocimientos[vinculo_pep]" label="¿Vínculo PEP?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[indique_vinculo_pep]" label="Indique"
                            placeholder="Indique Vínculo PEP" fgroup-class="col-md-5" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[vinculo1]" label="Vínculo" fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[nombre_vinculo1]" label="Nombre"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[tipodoc_vinculo1]" label="Tipo de Id."
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[numero_vinculo1]" label="Número"
                            fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[nacionalidad_vinculo1]" label="Nacionalidad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[entidad_vinculo1]" label="Entidad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[cargo_vinculo1]" label="Cargo" fgroup-class="col-md-1" />
                        <x-adminlte-input-date name="conocimientos[fecha_vinculo1]" label="Fecha de Vinculo"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="conocimientos[vinculo2]" fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[nombre_vinculo2]" fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[tipodoc_vinculo2]" fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[numero_vinculo2]" fgroup-class="col-md-1" />
                        <x-adminlte-input name="conocimientos[nacionalidad_vinculo2]" fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[entidad_vinculo2]" fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[cargo_vinculo2]" fgroup-class="col-md-1" />
                        <x-adminlte-input-date name="conocimientos[fecha_vinculo2]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                    </div>
                    <div class="row">
                        <x-adminlte-select name="conocimientos[operaciones_extranjeras]"
                            label="¿Operaciones Extranjeras?" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[tipo_operaciones]" label="Tipo de Operaciones"
                            placeholder="Tipo de Operaciones" fgroup-class="col-md-4" />
                        <x-adminlte-select name="conocimientos[cuentas_extranjeras]" label="¿Cuentas Extranjeras?"
                            fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-list"></i>
                                </div>
                            </x-slot>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="conocimientos[numero_cuenta]" label="Número de Cuenta"
                            placeholder="Número de Cuenta" fgroup-class="col-md-2" />
                        <x-adminlte-input name="conocimientos[entidad_cuenta]" label="Entidad de Cuenta"
                            placeholder="Entidad de Cuenta" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">

                        <x-adminlte-input name="conocimientos[moneda]" label="Moneda" placeholder="Moneda"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="monto" label="Monto Promedio" placeholder="0"
                            fgroup-class="col-md-2" class="text-right" />
                        <x-adminlte-input name="conocimientos[ciudad_operaciones]" label="Ciudad de Operaciones"
                            placeholder="Ciudad de Operaciones" fgroup-class="col-md-3" />
                        <x-adminlte-input name="conocimientos[pais]" label="País" placeholder="País"
                            fgroup-class="col-md-3" />
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
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciap_relacion1]" label="Relación"
                            placeholder="Relación" fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciap_direccion1]" label="Dirección"
                            placeholder="Dirección" fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciap_ciudad1]" label="Ciudad" placeholder="Ciudad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciap_telefono1]" label="Teléfono/Celular"
                            placeholder="Teléfono" fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciap_nombre2]" placeholder="Nombre"
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciap_relacion2]" placeholder="Relación"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciap_direccion2]" placeholder="Dirección"
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciap_ciudad2]" placeholder="Ciudad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciap_telefono2]" placeholder="Teléfono"
                            fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciac_entidad1]" label="Entidad" placeholder="Entidad"
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciac_tipo1]" label="Tipo de producto"
                            placeholder="Tipo de producto" fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_producto1]" label="No. Producto"
                            placeholder="Producto" fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_ciudad1]" label="Ciudad" placeholder="Ciudad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_telefono1]" label="Teléfono/Celular"
                            placeholder="Teléfono" fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[referenciac_entidad2]" placeholder="Entidad"
                            fgroup-class="col-md-3" />
                        <x-adminlte-input name="referencias[referenciac_tipo2]" placeholder="Tipo de producto"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_producto2]" placeholder="Producto"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_ciudad2]" placeholder="Ciudad"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input name="referencias[referenciac_telefono2]" placeholder="Teléfono"
                            fgroup-class="col-md-2" class="text-right" />
                    </div>
                    <div class="row">
                        <label for="">Beneficiarios en caso de Fallecimiento</label>
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre1]" label="Nombre" placeholder="Nombre"
                            fgroup-class="col-md-4" />
                        <x-adminlte-input name="referencias[beneficiario_documento1]" label="Documento"
                            placeholder="Documento" fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje1]" label="Porcentaje"
                            placeholder="0.0" fgroup-class="col-md-1" class="text-right" min="0" max="100" step="0.1" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento1]" label="Fecha de Nacimiento"
                            :config="$config" placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco1]" label="Parentesco"
                            placeholder="Parentesco" fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre2]" placeholder="Nombre"
                            fgroup-class="col-md-4" />
                        <x-adminlte-input name="referencias[beneficiario_documento2]" placeholder="Documento"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje2]" placeholder="0.0"
                            fgroup-class="col-md-1" class="text-right" min="0" max="100" step="0.1" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento2]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco2]" placeholder="Parentesco"
                            fgroup-class="col-md-2" />
                    </div>
                    <div class="row">
                        <x-adminlte-input name="referencias[beneficiario_nombre3]" placeholder="Nombre"
                            fgroup-class="col-md-4" />
                        <x-adminlte-input name="referencias[beneficiario_documento3]" placeholder="Documento"
                            fgroup-class="col-md-2" />
                        <x-adminlte-input type="number" name="referencias[beneficiario_porcentaje3]" placeholder="0.0"
                            fgroup-class="col-md-1" class="text-right" min="0" max="100" step="0.1" />
                        <x-adminlte-input-date name="referencias[beneficiario_nacimiento3]" :config="$config"
                            placeholder="Seleccione fecha" fgroup-class="col-md-2">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input-date>
                        <x-adminlte-input name="referencias[beneficiario_parentesco3]" placeholder="Parentesco"
                            fgroup-class="col-md-2" />
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
                                <input type="number" class="form-control text-right"
                                    id="valor_aporte_{{ $lineaAporte->id }}"
                                    name="aportes[{{ $lineaAporte->id }}][valor_aporte]" placeholder="0">
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
                <x-adminlte-button class="btn btn-primary" type="submit" label="Guardar" theme="primary"
                    icon="fa fa-save" />
                <a class="btn btn-secondary" href="{{ route('asociados.index') }}" role="button"><i
                        class="fa fa-undo"></i> Cancelar</a>
                <!-- Botón para capturar la fotografía -->
                <button type="button" class="btn btn-info" id="capturarFoto">Capturar Fotografía</button>
                <!-- Botón para capturar la firma -->
                <button type="button" class="btn btn-success" id="capturarFirma">Capturar Firma</button>
            </div>
        </div>
    </form>
</x-adminlte-card>

<!-- Modal para capturar la fotografía -->
<div class="modal fade" id="modalCapturaFoto" tabindex="-1" role="dialog" aria-labelledby="modalCapturaFotoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCapturaFotoLabel">Capturar Fotografía</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <video id="videoModal" width="500" height="400" autoplay></video>
                <canvas id="canvasModal" width="500" height="400" style="display: none;"></canvas>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="capturarModal" class="btn btn-primary">Capturar Imagen</button>
                <button id="guardarModal" class="btn btn-success" style="display: none;">Guardar Imagen</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para capturar la firma -->
<div class="modal fade" id="modalCapturaFirma" tabindex="-1" role="dialog" aria-labelledby="modalCapturaFirmaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCapturaFirmaLabel">Capturar Firma</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <canvas id="canvas" width="500" height="200" style="border:1px solid #000;"></canvas>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="guardarFirmaModal" class="btn btn-primary">Guardar Firma</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
document.getElementById('capturarFoto').addEventListener('click', function() {
    $('#modalCapturaFoto').modal('show');
});
document.getElementById('capturarFirma').addEventListener('click', function() {
    $('#modalCapturaFirma').modal('show');
});
</script>

<script>
// JavaScript para capturar y guardar la foto
var video = document.getElementById('videoModal');
var canvas = document.getElementById('canvasModal');
var context = canvas.getContext('2d');
navigator.mediaDevices.getUserMedia({
        video: true
    })
    .then(function(stream) {
        video.srcObject = stream;
    })
    .catch(function(err) {
        console.log('Error al acceder a la cámara: ', err);
    });
document.getElementById('capturarModal').addEventListener('click', function() {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    document.getElementById('capturarModal').style.display = 'none';
    document.getElementById('guardarModal').style.display = 'block';
});
document.getElementById('guardarModal').addEventListener('click', function() {
    var dataURL = canvas.toDataURL('image/png');
    var link = document.createElement('a');
    link.href = dataURL;
    link.download = 'imagen.png';
    link.click();

    // Detener el stream de video
    var stream = video.srcObject;
    var tracks = stream.getTracks();
    tracks.forEach(function(track) {
        track.stop();
    });
    $('#modalCapturaFoto').modal('hide'); // Cerrar el modal después de guardar la imagen
});

// Abrir el modal al hacer clic en el botón "Capturar Fotografía"
document.getElementById('capturarFoto').addEventListener('click', function() {
    $('#modalCapturaFoto').modal('show');
});
</script>

<script>
// JavaScript para capturar y guardar la firma
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

var isDrawing = false;
var lastX = 0;
var lastY = 0;

canvas.addEventListener('mousedown', function(e) {
    isDrawing = true;
    [lastX, lastY] = [e.offsetX, e.offsetY];
});

canvas.addEventListener('mousemove', function(e) {
    if (isDrawing) {
        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        [lastX, lastY] = [e.offsetX, e.offsetY];
        ctx.lineTo(lastX, lastY);
        ctx.stroke();
    }
});

canvas.addEventListener('mouseup', function() {
    isDrawing = false;
});

document.getElementById('guardarFirmaModal').addEventListener('click', function() {
    var dataURL = canvas.toDataURL('image/png');
    var imageData = dataURL.replace(/^data:image\/(png|jpg);base64,/, '');

    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: '/guardar-firma', // Ruta al controlador donde se manejará la solicitud
        data: {
            _token: token,
            firma: imageData,
            cedula: 'cedula', // Aquí debes obtener el valor de la cédula del formulario
            fecha_afiliacion: 'fecha_afiliacion' // Obtener la fecha de afiliación del formulario
        },
        success: function(response) {
            // Aquí puedes mostrar un mensaje de éxito o realizar alguna otra acción
            console.log('Firma guardada exitosamente');
            $('#modalCapturaFirma').modal('hide'); // Cerrar el modal después de guardar la firma
        },
        error: function(xhr, status, error) {
            // Manejar errores si es necesario
            console.error('Error al guardar la firma:', error);
        }
    });
});

// JavaScript para capturar y guardar la firma
//document.getElementById('guardarFirmaModal').addEventListener('click', function() {
//    var dataURL = canvas.toDataURL('image/png');
//    var link = document.createElement('a');
//    link.href = dataURL;
//    var cedula = document.getElementById('cedula').value; // Obtener el valor de la cédula
//    var fechaAfiliacion = document.getElementById('fecha_afiliacion').value; // Obtener el valor de la fecha de afiliación
//    var nombreFirma = fechaAfiliacion + '_' + cedula + '_firma.png'; // Nombre compuesto por fecha de afiliación, número de cédula y '_firma'
//    link.download = nombreFirma;
//    link.click();
//    $('#modalCapturaFirma').modal('hide'); // Cerrar el modal después de guardar la firma
//});



// Abrir el modal al hacer clic en el botón "Capturar Firma"
document.getElementById('capturarFirma').addEventListener('click', function() {
    $('#modalCapturaFirma').modal('show');
});
</script>

<script>
var video = document.getElementById('videoModal');
var canvas = document.getElementById('canvasModal');
var context = canvas.getContext('2d');

navigator.mediaDevices.getUserMedia({
        video: true
    })
    .then(function(stream) {
        video.srcObject = stream;
    })
    .catch(function(err) {
        console.log('Error al acceder a la cámara: ', err);
    });

document.getElementById('capturarModal').addEventListener('click', function() {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    document.getElementById('capturarModal').style.display = 'none';
    document.getElementById('guardarModal').style.display = 'block';
});

// JavaScript para capturar y guardar la foto
document.getElementById('guardarModal').addEventListener('click', function() {
    var dataURL = canvas.toDataURL('image/png');
    var link = document.createElement('a');
    link.href = dataURL;
    var cedula = document.getElementById('cedula').value; // Obtener el valor de la cédula
    var fechaAfiliacion = document.getElementById('fecha_afiliacion')
        .value; // Obtener el valor de la fecha de afiliación
    var nombreImagen = fechaAfiliacion + '_' + cedula +
        '.png'; // Nombre compuesto por fecha de afiliación y número de cédula
    link.download = nombreImagen;
    link.click();
    $('#modalCapturaFoto').modal('hide'); // Cerrar el modal después de guardar la imagen
});

//document.getElementById('guardarModal').addEventListener('click', function() {
//    var dataURL = canvas.toDataURL('image/png');
//    var link = document.createElement('a');
//    link.href = dataURL;
//    link.download = 'imagen.png';
//    link.click();
//    $('#modalCapturaFoto').modal('hide'); // Cerrar el modal después de guardar la imagen
//});

// Abrir el modal al hacer clic en el botón "Capturar Fotografía"
document.getElementById('capturarFoto').addEventListener('click', function() {
    $('#modalCapturaFoto').modal('show');
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Obtener el campo de fecha de nacimiento
    const fechaNacimiento = document.getElementById('fecha_nacimiento');
    // Función para calcular la edad
    function calcularEdad() {
        // Obtener la fecha de nacimiento seleccionada
        const fechaNacimientoSeleccionada = new Date(fechaNacimiento.value);
        // Obtener la fecha actual
        const hoy = new Date();
        // Calcular la diferencia en milisegundos entre la fecha actual y la fecha de nacimiento
        const diferencia = hoy.getTime() - fechaNacimientoSeleccionada.getTime();
        // Calcular la edad dividiendo la diferencia por el número de milisegundos en un año (aproximadamente 31557600000)
        const edad = Math.floor(diferencia / 31557600000);
        // Actualizar el campo de edad en el formulario con la edad calculada
        document.getElementById('edad').value = edad;
    }
    // Agregar eventos para calcular la edad cuando cambia la fecha de nacimiento o se pierde el foco del campo
    fechaNacimiento.addEventListener('change', calcularEdad);
    fechaNacimiento.addEventListener('blur', calcularEdad);
});
</script>

<script>
$(document).ready(function() {
    // Cuando cambie la selección del departamento de expedicion
    $('#dpto_expedicion').change(function() {
        var departamentoId = $(this).val();
        $.ajax({
            url: '/obtener-municipios/' + departamentoId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#lugar_expedicion').empty();
                $.each(data, function(key, value) {
                    $('#lugar_expedicion').append('<option value="' + key +
                        '">' +
                        value + '</option>');
                });
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Cuando cambie la selección del departamento de nacimiento
    $('#dpto_nacimiento').change(function() {
        var departamentoId = $(this).val();
        $.ajax({
            url: '/obtener-municipios/' + departamentoId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#lugar_nacimiento').empty();
                $.each(data, function(key, value) {
                    $('#lugar_nacimiento').append('<option value="' + key +
                        '">' +
                        value + '</option>');
                });
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Cuando cambie la selección del departamento de vivienda
    $('#dpto').change(function() {
        var departamentoId = $(this).val();
        $.ajax({
            url: '/obtener-municipios/' + departamentoId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#ciudad').empty();
                $.each(data, function(key, value) {
                    $('#ciudad').append('<option value="' + key + '">' +
                        value + '</option>');
                });
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Cuando cambie la selección del departamento de vivienda
    $('#dpto_empresa').change(function() {
        var departamentoId = $(this).val();
        $.ajax({
            url: '/obtener-municipios/' + departamentoId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#ciudad_empresa').empty();
                $.each(data, function(key, value) {
                    $('#ciudad_empresa').append('<option value="' + key + '">' +
                        value + '</option>');
                });
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Cuando cambie la selección del departamento de vivienda
    $('#dpto_secundaria').change(function() {
        var departamentoId = $(this).val();
        $.ajax({
            url: '/obtener-municipios/' + departamentoId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#ciudad_secundaria').empty();
                $.each(data, function(key, value) {
                    $('#ciudad_secundaria').append('<option value="' + key + '">' +
                        value + '</option>');
                });
            }
        });
    });
});
</script>
@stop

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif