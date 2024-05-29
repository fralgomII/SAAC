<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asociado;
use Carbon\Carbon;

class EstadoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-estado', ['only' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asociados = Asociado::all();
        return view('estados.index',[
            'estados' => $asociados,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
