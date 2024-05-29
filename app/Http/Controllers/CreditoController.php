<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreditoRequest;
use App\Models\Credito;
use App\Models\MovimientoCredito;
use App\Models\Asociado;
use App\Models\LineaCredito;
use Illuminate\Http\Request;

class CreditoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-creditos|crear-creditos|editar-creditos|borrar-creditos', ['only' => ['index']]);
         $this->middleware('permission:crear-creditos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-creditos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-creditos', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditos = Credito::all();
        return view('creditos.index', compact('creditos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Aquí puedes cargar los datos necesarios para el formulario de creación, como los lineas de crédito disponibles y los asociados.
        $asociados = Asociado::all();
        $lineacreditos = Lineacredito::all();
        return view('creditos.create', compact('asociados', 'lineacreditos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         // Validación de los campos
         $request->validate([
             'fecha_credito' => 'required|date',
             'asociado_id' => 'required|exists:asociados,id',
             'lineacredito_id' => 'required|exists:lineacreditos,id',
             'valor_credito' => 'required|numeric|min:500000|max:50000000',
             'interes_anual' => 'required|numeric|min:8|max:100',
             'interes_credito' => 'required|numeric|min:0.5|max:100',
             'seguro_deudor' => 'required|numeric|min:0|max:100000',
             'seguro_credito' => 'required|numeric|min:0|max:100000',
             'plazo_credito' => 'required|numeric|min:12|max:120',
             'estado' => 'required|string|max:20',
         ]);
     
         // Almacenar la solicitud de crédito
         $credito = Credito::create($request->all());
     
         // Calcular los detalles de las cuotas del préstamo
         $valorCredito = $request->valor_credito;
         $interesAnual = $request->interes_anual / 100;
         $plazo = $request->plazo_credito;
         $seguroDeudor = $request->seguro_deudor;
         $seguroCredito = $request->seguro_credito;
         $saldoCredito = $valorCredito;
         $detalleCuotas = [];
     
         for ($i = 1; $i <= $plazo; $i++) {
             $interesPagado = $saldoCredito * ($interesAnual / 12);
             $valorCuota = ($valorCredito * $interesAnual / 12) / (1 - pow(1 + ($interesAnual / 12), -$plazo));
             $abonoCapital = $valorCuota - $interesPagado - $seguroDeudor - $seguroCredito;
             $saldoCredito -= $abonoCapital;
     
             $detalleCuotas[] = [
                 'cuota' => $i,
                 'interes' => $interesPagado,
                 'capital' => $abonoCapital,
                 'seguro_deudor' => $seguroDeudor,
                 'seguro_credito' => $seguroCredito,
                 'valor_cuota' => $valorCuota,
                 'valor_cuota' => 0,
                 'valor_saldo' => $saldoCredito,
             ];
         }
     
         // Almacenar los detalles de las cuotas en la tabla movimientos_creditos
         foreach ($detalleCuotas as $detalle) {
             MovimientoCredito::create([
                 'credito_id' => $credito->id,
                 'cuota' => $detalle['cuota'],
                 'interes' => $detalle['interes'],
                 'capital' => $detalle['capital'],
                 'seguro_deudor' => $detalle['seguro_deudor'],
                 'seguro_credito' => $detalle['seguro_credito'],
                 'valor_cuota' => $detalle['valor_cuota'],
                 'valor_cuota' => 0,
                 'valor_saldo' => $detalle['valor_saldo'],
             ]);
         }
     
         return redirect()->route('creditos.index')->with('success', 'Solicitud de crédito registrada correctamente');
     }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    // Buscar el crédito por su ID junto con los movimientos asociados
    $credito = Credito::with('movimientos')->findOrFail($id);

    // Verificar si se encontró el crédito
    if (!$credito) {
        // Manejar la situación en la que el crédito no se encontró, por ejemplo, redirigir o mostrar un mensaje de error
    }

    // Pasar los datos del crédito a la vista
    return view('creditos.show', compact('credito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $credito = Credito::findOrFail($id);
        // Aquí también puedes cargar los datos necesarios para el formulario de edición.
        // Obtener todos los asociados para el select
        $asociados = Asociado::all();
        // Obtener todos los asociados para el select
        $lineacreditos = Lineacredito::all();
        return view('creditos.edit', compact('credito', 'asociados', 'lineacreditos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    // Validación de los campos
    $request->validate([
        'fecha_credito' => 'required|date',
        'asociado_id' => 'required|exists:asociados,id',
        'lineacredito_id' => 'required|exists:lineacreditos,id',
        'valor_credito' => 'required|numeric|min:500000|max:50000000',
        'interes_anual' => 'required|numeric|min:8|max:100',
        'interes_credito' => 'required|numeric|min:0.5|max:100',
        'seguro_deudor' => 'required|numeric|min:0|max:100000',
        'seguro_credito' => 'required|numeric|min:0|max:100000',
        'plazo_credito' => 'required|numeric|min:12|max:120',
        'estado' => 'required|string|max:20',
    ]);

    // Buscar el crédito a actualizar
    $credito = Credito::findOrFail($id);

    // Actualizar la solicitud de crédito
    $credito->update($request->all());

    // Eliminar los detalles de las cuotas existentes del crédito
    MovimientoCredito::where('credito_id', $id)->delete();

    // Calcular y almacenar los detalles de las cuotas del préstamo actualizados
    $valorCredito = $request->valor_credito;
    $interesAnual = $request->interes_anual / 100;
    $plazo = $request->plazo_credito;
    $seguroDeudor = $request->seguro_deudor;
    $seguroCredito = $request->seguro_credito;
    $saldoCredito = $valorCredito;
    $detalleCuotas = [];

    for ($i = 1; $i <= $plazo; $i++) {
        $interesPagado = $saldoCredito * ($interesAnual / 12);
        $valorCuota = ($valorCredito * $interesAnual / 12) / (1 - pow(1 + ($interesAnual / 12), -$plazo));
        $abonoCapital = $valorCuota - $interesPagado - $seguroDeudor - $seguroCredito;
        $saldoCredito -= $abonoCapital;

        $detalleCuotas[] = [
            'credito_id' => $id,
            'cuota' => $i,
            'interes' => $interesPagado,
            'capital' => $abonoCapital,
            'seguro_deudor' => $seguroDeudor,
            'seguro_credito' => $seguroCredito,
            'valor_cuota' => $valorCuota,
            'valor_cuota' => 0,
            'valor_saldo' => $saldoCredito,
        ];
    }

    // Almacenar los detalles de las cuotas actualizados en la tabla movimientos_creditos
    MovimientoCredito::insert($detalleCuotas);

    return redirect()->route('creditos.index')->with('success', 'Solicitud de crédito actualizada correctamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // Buscar el crédito por su ID
    $credito = Credito::findOrFail($id);

    // Eliminar el crédito de la base de datos
    $credito->delete();

    return redirect()->route('creditos.index')->with('success', 'Crédito eliminado correctamente');
    }
}