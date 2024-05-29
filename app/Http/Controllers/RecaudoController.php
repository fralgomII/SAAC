<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecaudoRequest;
use Illuminate\Http\Request;
use App\Models\Recaudo;
use App\Models\Asociado;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;


class RecaudoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-recaudos|crear-recaudos|editar-recaudos|borrar-recaudos', ['only' => ['index']]);
         $this->middleware('permission:crear-recaudos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-recaudos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-recaudos', ['only' => ['destroy']]);
    }
    
    public function index()
    {
        $recaudos = Recaudo::all();
        return view('recaudos.index', compact('recaudos'));
    }

    public function create()
    {
        // Aquí podrías necesitar cargar datos adicionales si es necesario
        $asociados = Asociado::all();
        return view('recaudos.create', compact('asociados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_recaudo' => 'required|date',
            'asociado_id' => 'required|exists:asociados,id',
            'valor_recaudo' => 'required|numeric|min:0',
        ]);

        Recaudo::create($request->all());
  
        return redirect()->route('recaudos.index')->with('success', '¡El Recaudo se ha registrado correctamente!');
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

    public function show($id)
    {
        $recaudo = Recaudo::findOrFail($id);
        return view('recaudos.show', compact('recaudo'));
    }

    public function edit($id)
    {
        // Obtener el recaudo a editar
        $recaudo = Recaudo::findOrFail($id);

        // Obtener todos los asociados para el select
        $asociados = Asociado::all();

        // Pasar los datos del recaudo y los asociados a la vista
        return view('recaudos.edit', compact('recaudo', 'asociados'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_recaudo' => 'required|date',
            'asociado_id' => 'required|exists:asociados,id',
            'valor_recaudo' => 'required|numeric|min:0',
        ]);

        $recaudo = Recaudo::findOrFail($id);
        $recaudo->update($request->all());

        return redirect()->route('recaudos.index')->with('success', '¡El Recaudo se ha actualizado correctamente!');
    }

    public function destroy($id)
    {
        $recaudo = Recaudo::findOrFail($id);
        $recaudo->delete();

        return redirect()->route('recaudos.index')->with('success', '¡El Recaudo se ha eliminado correctamente!');
    }
}