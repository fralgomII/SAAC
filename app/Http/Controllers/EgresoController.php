<?php

namespace App\Http\Controllers;

use App\Http\Requests\EgresoRequest;
use Illuminate\Http\Request;
use App\Models\Egreso;
use App\Models\Asociado;
use Carbon\Carbon;

class EgresoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-egresos|crear-egresos|editar-egresos|borrar-egresos', ['only' => ['index']]);
         $this->middleware('permission:crear-egresos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-egresos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-egresos', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $egresos = Egreso::all();
        return view('egresos.index', compact('egresos'));
    }

    public function create()
    {
        // Aquí podrías necesitar cargar datos adicionales si es necesario
        $asociados = Asociado::all();
        return view('egresos.create', compact('asociados'));
    }

    public function store(Request $request)
{
    $request->validate([
        'fecha_egreso' => 'required|date',
        'asociado_id' => 'required|exists:asociados,id',
        'valor_egreso' => 'required|numeric|min:0',
    ]);

    // Eliminar los separadores de miles del valor_egreso
    $valorEgreso = str_replace('.', '', $request->valor_egreso);

    // Crear el egreso con el valor sin formato
    Egreso::create([
        'fecha_egreso' => $request->fecha_egreso,
        'asociado_id' => $request->asociado_id,
        'valor_egreso' => $valorEgreso,
    ]);

    return redirect()->route('egresos.index')->with('success', '¡El Egreso se ha registrado correctamente!');
}

    public function show($id)
    {
        $egreso = Egreso::findOrFail($id);
        return view('egresos.show', compact('egreso'));
    }

    public function edit($id)
    {
        // Obtener el Egreso a editar
        $egreso = egreso::findOrFail($id);

        // Obtener todos los asociados para el select
        $asociados = Asociado::all();

        // Pasar los datos del Egreso y los asociados a la vista
        return view('egresos.edit', compact('egreso', 'asociados'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'fecha_egreso' => 'required|date',
        'asociado_id' => 'required|exists:asociados,id',
        'valor_egreso' => 'required|numeric|min:0',
    ]);

    // Eliminar los separadores de miles del valor_egreso
    $valorEgreso = str_replace('.', '', $request->valor_egreso);

    // Actualizar el egreso con el valor sin formato
    $egreso = Egreso::findOrFail($id);
    $egreso->update([
        'fecha_egreso' => $request->fecha_egreso,
        'asociado_id' => $request->asociado_id,
        'valor_egreso' => $valorEgreso,
    ]);

    return redirect()->route('egresos.index')->with('success', '¡El Egreso se ha actualizado correctamente!');
}

    public function destroy($id)
    {
        $egreso = egreso::findOrFail($id);
        $egreso->delete();

        return redirect()->route('egresos.index')->with('success', '¡El Egreso se ha eliminado correctamente!');
    }
}