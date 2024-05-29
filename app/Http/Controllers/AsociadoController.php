<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsociadoRequest;
use Illuminate\Http\Request;
use App\Models\Asociado;
use App\Models\Economica;
use App\Models\Activo;
use App\Models\Conocimiento;
use App\Models\Referencia;
use App\Models\Municipio;
use App\Models\Departamento;
use App\Models\LineaAporte; 
use App\Models\AsociadoAporte;
use Carbon\Carbon;

class AsociadoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-asociados|crear-asociados|editar-asociados|borrar-asociados')->only('index');
         $this->middleware('permission:crear-asociados', ['only'=>['create','store']]);
         $this->middleware('permission:editar-asociados', ['only'=>['edit','update']]);
         $this->middleware('permission:borrar-asociados', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los asociados con sus datos económicos y de activos cargados
        $asociados = Asociado::with('economicas', 'activos', 'conocimientos', 'referencias')->get();

        // Retornar la vista de índice de asociados con los datos cargados
        return view('asociados.index', ['asociados' => $asociados]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener todos los asociados, municipios y departamentos
        $asociados = Asociado::all();
        $municipios = Municipio::all();
        $departamentos = Departamento::all();

        // Obtener todas las líneas de aportes
        $lineasAportes = LineaAporte::all();

        // Crear instancias vacías para los datos económicos y de activos
        $economicas = new Economica();
        $activos = new Activo();
        $conocimientos = new Conocimiento();
        $referencias = new Referencia();

        // Retornar la vista de creación de asociados con los datos necesarios
        return view('asociados.create', compact('asociados', 'economicas', 'activos', 'conocimientos', 'referencias', 'lineasAportes', 'municipios', 'departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsociadoRequest $request)
    {

        // Obtener los datos básicos del asociado
        $datosAsociado = $request->except(['economicas', 'activos', 'conocimientos', 'referencias']);
        // Imprimir los datos básicos del asociado
        //dd($datosAsociado);
        // Crear el asociado con los datos básicos
        $asociado = Asociado::create($datosAsociado);

        // Obtener los datos económicos del asociado
        $datosEconomicos = $request->get('economicas');
        // Imprimir los datos básicos del asociado
        //dd($datosEconomicos);
        // Crear los datos económicos asociados al asociado
        if ($datosEconomicos) {
            $asociado->economicas()->create($datosEconomicos);
        }

        // Obtener los datos de activos del asociado
        $datosActivos = $request->get('activos');
         // Imprimir los datos básicos del asociado
         //dd($datosActivos);
        // Crear los datos de activos asociados al asociado
        if ($datosActivos) {
            $asociado->activos()->create($datosActivos);
        }

        // Obtener los datos conocimientos del asociado
        $datosConocimientos = $request->get('conocimientos');
        // Imprimir los datos conocimientos del asociado
        //dd($datosConocimientos);
        // Crear los datos de conocimientos asociados al asociado
        if ($datosConocimientos) {
            $asociado->conocimientos()->create($datosConocimientos);
        }

        // Obtener los datos referencias del asociado
        $datosReferencias = $request->get('referencias');
        // Imprimir los datos referencias del asociado
        //dd($datosReferencias);
        // Crear los datos de referencias asociados al asociado
        if ($datosReferencias) {
            $asociado->referencias()->create($datosReferencias);
        }

        // Obtener los datos referencias del asociado
        $datosaportes = $request->get('aportes');
        // Imprimir los datos referencias del aporte
        //dd($aportes);
        // Guardar los aportes si están presentes en la solicitud
        if ($datosaportes) {
            foreach ($datosaportes as $aporte) {
                AsociadoAporte::create([
                'asociado_id' => $asociado->id,
                'lineaaporte_id' => $aporte['linea_aporte_id'],
                'valor_aporte' => $aporte['valor_aporte'],
            ]);
        }
    }

       
        // Redirigir a la vista de index con un mensaje de éxito
        return redirect()->action([AsociadoController::class, 'index'])->with('success', 'Asociado creado exitosamente.');

        //$asociado = $request->all();
        //$fechaNacimiento = Carbon::parse($request->fecha_nacimiento);
        //$hoy = Carbon::now();
        //$edad = $hoy->diffInYears($fechaNacimiento);
        //$asociado->edad = $edad;
        //Asociado::create($asociado);

        //Asociado::create($asociado->economicas());

        //Asociado::create($asociado->activos());
        
        // Verificar si se ha enviado una fotografía
        //if ($request->hasFile('foto')) {
            // Guardar la fotografía en el sistema de archivos del servidor
        //    $foto = $request->file('foto');
        //    $rutaFoto = $foto->store('fotos'); // Almacenar en el directorio "storage/app/fotos"

            // Guardar la ruta de la fotografía en la base de datos u otro lugar
            // Aquí debes usar el modelo adecuado y la lógica de tu aplicación
        //    $asociado->foto = $rutaFoto;
        //    $asociado->save();
        //}
        // Mensaje de éxito
        //session()->flash('success', 'Asociado creado correctamente.');

        //return redirect()->action([AsociadoController::class, 'index'])->with('success', 'Asociado Grabado Exitosamente');
    }

    public function pdf($id)
    {
        $recaudo = Recaudo::find($id);
        $asociado = Asociado::find($recaudo->asociado_id);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('informes.recaudo', ['recaudo' => $recaudo, 'asociado' => $asociado]);
        return $pdf->download('recaudo.pdf');
        //$pdf->save(public_path('recibos/recibo.pdf'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar el asociado por su ID junto con sus datos asociados
        $asociado = Asociado::with('economicas', 'activos', 'conocimientos', 'referencias', 'aportes')->findOrFail($id);

        //dd($asociado);
        //dd($asociado->referencias);

        $municipios = Municipio::all();
        $departamentos = Departamento::all();

        // Obtener todas las líneas de aportes
        $lineasAportes = LineaAporte::all();

        // Retornar la vista de detalles del asociado con los datos cargados
        return view('asociados.show', [
            'asociado' => $asociado,
            'departamentos' => $departamentos,
            'municipios' => $municipios,
            'lineasAportes' => $lineasAportes,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar el asociado por su ID junto con sus datos económicos y de activos
        $asociado = Asociado::with('economicas', 'activos', 'conocimientos', 'referencias', 'aportes')->findOrFail($id);

        //dd($asociado);
        //dd($asociado->aportes);

        // Obtener la lista de departamentos
        $departamentos = Departamento::all();
        // Obtener la lista de municipios (puedes cargarlos mediante JavaScript basado en la selección del departamento en la vista)
        $municipios = Municipio::all();

        // Obtener todas las líneas de aportes
        $lineasAportes = LineaAporte::all();

        // Obtener los aportes del asociado
        $datosaportes = $asociado->aportes;

        // Pasar el asociado, los datos económicos, los datos de activos y las listas de departamentos y municipios a la vista del formulario de edición
        return view('asociados.edit', [
            'asociado' => $asociado,
            'departamentos' => $departamentos,
            'municipios' => $municipios,
            'lineasAportes' => $lineasAportes,
            'datosaportes' => $datosaportes, // Agregar los aportes del asociado a la vista
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Buscar el asociado por su ID
        $asociado = Asociado::findOrFail($id);

        // Validar los campos enviados en la solicitud
        $request->validate([
            'fecha_afiliacion' => 'nullable|date',
            'nombre' => 'required|string|max:30',
            'primer_apellido' => 'required|string|max:30',
            'segundo_apellido' => 'required|string|max:30',
            'tipo_documento' => 'required|string|max:5',
            'cedula' => 'required|string|max:10',
            'fecha_expedicion' => 'nullable|date',
            'lugar_expedicion' => 'nullable|string|max:30',
            'dpto_expedicion' => 'nullable|string|max:30',
            'fecha_nacimiento' => 'nullable|date',
            'edad' => 'nullable|string|max:3',
            'lugar_nacimiento' => 'nullable|string|max:30',
            'dpto_nacimiento' => 'nullable|string|max:30',
            'genero' => 'required|string|max:11',
            'telefono' => 'nullable|string|max:30',
            'direccion' => 'nullable|string|max:80',
            'ciudad' => 'nullable|string|max:30',
            'dpto' => 'nullable|string|max:30',
            'email' => 'nullable|email|max:80',
            'estado_civil' => 'nullable|string|max:15',
            'tipo_vivienda' => 'nullable|string|max:10',
            'estrato' => 'nullable|integer',
            'nivel_educativo' => 'nullable|string|max:15',
            'profesion' => 'nullable|string|max:30',
            'estado' => 'nullable|string|max:20'
        ]);

        // Actualizar los datos básicos del asociado
        $asociado->update($request->except(['economicas', 'activos', 'conocimientos', 'referencias', 'aportes']));
        // Actualizar los datos económicos del asociado
        $asociado->economicas()->update($request->get('economicas', []));
        // Actualizar los datos de activos del asociado
        $asociado->activos()->update($request->get('activos', []));
        // Actualizar los datos de conocimientos del asociado
        $asociado->conocimientos()->update($request->get('conocimientos', []));
        // Actualizar los datos de referencias del asociado
        $asociado->referencias()->update($request->get('referencias', []));

        // Obtener los datos de aportes del asociado
        $datosAportes = $request->get('aportes', []);
        // Actualizar los aportes si están presentes en la solicitud
        if ($datosAportes) {
            foreach ($datosAportes as $aporte) {
                $asociado->aportes()->updateOrCreate(
                    ['lineaaporte_id' => $aporte['linea_aporte_id']],
                    ['valor_aporte' => $aporte['valor_aporte']]
                );
            }
        }

        // Redirigir a la vista de detalles del asociado o a donde sea necesario
        return redirect()->action([AsociadoController::class, 'index'])->with('success', 'Asociado actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener el asociado por su ID
        $asociado = Asociado::findOrFail($id);

        // Eliminar los datos económicos asociados al asociado
        $asociado->economicas()->delete();
        // Eliminar los datos de activos asociados al asociado
        $asociado->activos()->delete();
        // Eliminar los datos de conocimientos asociados al asociado
        $asociado->conocimientos()->delete();
        // Eliminar los datos de conocimientos asociados al referencias
        $asociado->referencias()->delete();
        // Eliminar el asociado
        $asociado->delete();

        // Redireccionar a una ruta específica (puedes ajustarla según tu aplicación)
        return redirect()->route('asociados.index')
            ->with('success', 'Asociado y sus datos económicos y de activos eliminados correctamente.');
    }

    public function guardarFirma(Request $request)
    {
        // Validar y guardar la imagen de la firma en la carpeta adecuada
        $imageData = $request->firma;
        $cedula = $request->cedula;
        $fechaAfiliacion = $request->fecha_afiliacion;

        // Lógica para guardar la firma en la carpeta de firmas
        // Aquí puedes usar el método de Laravel para almacenar archivos, por ejemplo:
        $nombreArchivo = $fechaAfiliacion . '_' . $cedula . '.png';
        $ruta = 'storage/firmas/' . $nombreArchivo;
        file_put_contents($ruta, base64_decode($imageData));

        // Puedes devolver una respuesta JSON si lo deseas
        return response()->json(['success' => true]);
    }
  
}