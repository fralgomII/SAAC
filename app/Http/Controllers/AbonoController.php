<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-abonos|crear-abonos|editar-abonos|borrar-abonos', ['only' => ['index']]);
         $this->middleware('permission:crear-abonos', ['only' => ['create','store']]);
         $this->middleware('permission:editar-abonos', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-abonos', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
