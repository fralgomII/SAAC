<?php

namespace App\Http\Controllers;

use App\Http\Requests\LineaCreditoRequest;
use Illuminate\Http\Request;
use App\Models\LineaCredito;

class LineaCreditoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-lineacreditos|crear-lineacreditos|editar-lineacreditos|borrar-lineacreditos', ['only' => ['index']]);
         $this->middleware('permission:crear-lineacreditos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-lineacreditos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-lineacreditos', ['only' => ['destroy']]);
    }
    public function index()
    {
        // Obtener todos las lineas de créditos
        $lineacreditos = LineaCredito::all();
        return view('lineacreditos.index', compact('lineacreditos'));
    }

    public function create()
    {
        return view('lineacreditos.create');
    }

    public function store(Request $request)
    {
        // Validar la entrada de datos
        $request->validate([
            'nombre' => 'required|string|max:80',
            'plazo' => 'required|string|max:3',
            'valor' => 'required|numeric',
            'interes_anual' => 'nullable|numeric',
            'interes' => 'nullable|numeric',
            'seguro_vida' => 'nullable|numeric',
            'seguro_credito' => 'nullable|numeric',
            'estado' => 'nullable|string|max:20',
        ]);

        // Crear un nueva linea de crédito en la base de datos
        LineaCredito::create($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Linea de crédito creada correctamente.');

        return redirect()->route('lineacreditos.index')
                         ->with('success', 'Linea de crédito creada exitosamente');
    }

    public function show($id)
    {
        // Obtener la linea de crédito por su ID
        $lineacreditos = LineaCredito::findOrFail($id);

        return view('lineacreditos.show', compact('lineacreditos'));
    }

    public function edit($id)
    {
        // Obtener la linea de crédito por su ID
        $lineacreditos = LineaCredito::findOrFail($id);
        return view('lineacreditos.edit', compact('lineacreditos'));
    }

    public function update(Request $request, $id)
    {
        // Validar la entrada de datos
        $request->validate([
            'nombre' => 'required|string|max:80',
            'plazo' => 'required|string|max:3',
            'valor' => 'required|numeric',
            'interes_anual' => 'nullable|numeric',
            'interes' => 'nullable|numeric',
            'seguro_vida' => 'nullable|numeric',
            'seguro_credito' => 'nullable|numeric',
            'estado' => 'nullable|string|max:20',
        ]);

        // Actualizar la de crédito en la base de datos
        $lineacreditos = LineaCredito::findOrFail($id);
        $lineacreditos->update($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Línea de crédito actualizada correctamente.');

        return redirect()->route('lineacreditos.index')
                         ->with('success', 'Línea de crédito actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar la linea de crédito de la base de datos
        $lineacreditos = LineaCredito::findOrFail($id);
        $lineacreditos->delete();

        return redirect()->route('lineacreditos.index')
                         ->with('success', 'Linea de crédito eliminado exitosamente');
    }
}