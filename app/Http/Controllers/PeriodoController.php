<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodoRequest;
use Illuminate\Http\Request;
use App\Models\Periodo;

class PeriodoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-periodos|crear-periodos|editar-periodos|borrar-periodos', ['only' => ['index']]);
         $this->middleware('permission:crear-periodos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-periodos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-periodos', ['only' => ['destroy']]);
    }
    public function index()
    {
        // Obtener todos los Periodo
        $periodos = Periodo::all();
        return view('periodos.index', compact('periodos'));
    }

    public function create()
    {
        return view('periodos.create');
    }

    public function store(Request $request)
    {
        // Validar la entrada de datos
        $request->validate([
            'mes' => 'required|string|max:2',
            'año' => 'required|string|max:4',
            'nombre' => 'required|string|max:80',
            'estado' => 'nullable|string|max:20',
        ]);

        // Crear un nuevo Periodo en la base de datos
        Periodo::create($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Periodo creado correctamente.');

        return redirect()->route('periodos.index')
                         ->with('success', 'Periodo creado exitosamente');
    }

    public function show($id)
    {
        // Obtener el Periodo por su ID
        $periodos = Periodo::findOrFail($id);

        return view('periodos.show', compact('periodos'));
    }

    public function edit($id)
    {
        // Obtener el Periodo por su ID
        $periodos = Periodo::findOrFail($id);
        return view('periodos.edit', compact('periodos'));
    }

    public function update(Request $request, $id)
    {
        // Validar la entrada de datos
        $request->validate([
            'mes' => 'required|string|max:2',
            'año' => 'required|string|max:4',
            'nombre' => 'required|string|max:80',
            'estado' => 'nullable|string|max:20',
        ]);

        // Actualizar Periodo en la base de datos
        $periodos = Periodo::findOrFail($id);
        $periodos->update($request->all());
        // Mensaje de éxito
        session()->flash('success', 'Periodo actualizado correctamente.');

        return redirect()->route('periodos.index')
                         ->with('success', 'Periodo actualizada exitosamente');
    }

    public function destroy($id)
    {
        // Eliminar el Periodo de la base de datos
        $periodos = Periodo::findOrFail($id);
        $periodos->delete();

        return redirect()->route('periodos.index')
                         ->with('success', 'Periodo eliminado exitosamente');
    }
}