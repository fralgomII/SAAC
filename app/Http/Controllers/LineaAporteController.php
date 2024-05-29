<?php

namespace App\Http\Controllers;

use App\Http\Requests\LineaAporteRequest;
use Illuminate\Http\Request;
use App\Models\LineaAporte;

class LineaAporteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-lineaaportes|crear-lineaaportes|editar-lineaaportes|borrar-lineaaportes', ['only' => ['index']]);
         $this->middleware('permission:crear-lineaaportes', ['only' => ['create','store']]);
         $this->middleware('permission:editar-lineaaportes', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-lineaaportes', ['only' => ['destroy']]);
    }
    public function index()
    {
        // Obtener todos las lineas de aportes
        $lineaaportes = LineaAporte::all();
        return view('lineaaportes.index', compact('lineaaportes'));
    }

    public function create()
    {
        return view('lineaaportes.create');
    }

    public function store(Request $request)
    {
        // Validar la entrada de datos
        $request->validate([
            'nombre' => 'required|string|max:80',
            'estado' => 'nullable|string|max:20',
        ]);

        // Crear un nueva linea de aporte en la base de datos
        LineaAporte::create($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Linea de aporte creada correctamente.');

        return redirect()->route('lineaaportes.index')
                         ->with('success', 'Linea de aporte creada exitosamente');
    }

    public function show($id)
    {
        // Obtener la linea de aporte por su ID
        $lineaaportes = LineaAporte::findOrFail($id);

        return view('lineaaportes.show', compact('lineaaportes'));
    }

    public function edit($id)
    {
        // Obtener la linea de aporte por su ID
        $lineaaportes = LineaAporte::findOrFail($id);
        return view('lineaaportes.edit', compact('lineaaportes'));
    }

    public function update(Request $request, $id)
    {
        // Validar la entrada de datos
        $request->validate([
            'nombre' => 'required|string|max:80',
            'estado' => 'nullable|string|max:20',
        ]);

        // Actualizar linea de aporte en la base de datos
        $lineaaportes = LineaAporte::findOrFail($id);
        $lineaaportes->update($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Línea de aporte actualizada correctamente.');

        return redirect()->route('lineaaportes.index')
                         ->with('success', 'Línea de aporte actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar la linea de aporte de la base de datos
        $lineaaportes = LineaAporte::findOrFail($id);
        $lineaaportes->delete();

        return redirect()->route('lineaaportes.index')
                         ->with('success', 'Linea de aporte eliminado exitosamente');
    }
}