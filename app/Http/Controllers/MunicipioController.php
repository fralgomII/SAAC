<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
use App\Models\Departamento;

class MunicipioController extends Controller
{
    public function obtenerMunicipios($departamentoId)
    {
        // Buscar los municipios del departamento
        $municipios = Municipio::where('departamento_id', $departamentoId)->get();

        // Crear un array para almacenar los datos de los municipios
        $datosMunicipios = [];

        // Llenar el array con los datos de los municipios
        foreach ($municipios as $municipio) {
            $datosMunicipios[$municipio->id] = $municipio->nombre;
        }

        // Devolver los datos de los municipios en formato JSON
        return response()->json($datosMunicipios);
    }
}