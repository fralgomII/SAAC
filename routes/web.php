<?php

use App\Models\Asociado;
use App\Models\Recaudo;
use App\Models\LineaCredito;
use App\Models\Credito;
use App\Models\Abono;
use App\Models\User;
use App\Http\Controllers\AsociadoController;
use App\Http\Controllers\RecaudoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\LineaCreditoController;
use App\Http\Controllers\LineaAporteController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\AbonoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EgresoController;
use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| rutas son cargadas por RouteServiceProvider y todas ellas
| ser asignado al grupo de middleware "web". ¡Haz algo genial!
|
*/

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::resource('asociados', AsociadoController::class);

    Route::post('/guardar-firma', [App\Http\Controllers\AsociadoController::class, 'guardarFirma'])->name('guardar.firma');

    Route::get('/asociados/{id}/pdf', [App\Http\Controllers\AsociadoController::class, 'pdf'])->name('asociados.pdf');

    Route::resource('lineaaportes', LineaAporteController::class);

    Route::resource('lineacreditos', LineaCreditoController::class);

    Route::resource('recaudos', RecaudoController::class);

    Route::get('/recaudos/{id}/pdf', [App\Http\Controllers\RecaudoController::class, 'pdf'])->name('recaudos.pdf');

    Route::resource('creditos', CreditoController::class);

    Route::resource('users', UserController::class);

    Route::resource('roles', RolController::class);

    Route::resource('estados', EstadoController::class);

    Route::resource('periodos', PeriodoController::class);

    Route::resource('egresos', EgresoController::class);

    Route::get('/obtener-municipios/{departamentoId}', [MunicipioController::class, 'obtenerMunicipios']);


    Route::get('/credito/simular', function () {
        return view('credito-simular');
    })->name('credito-simular');

    Route::get('/credito/abono', function () {
        // Obtenemos los asociados de la base de datos
        $abonos = Abono::all();

        // Asignamos la cabecera de nuestro datatable
        $heads = [
            'ID',
            'Fecha Abono',
            'Nombre Asociado',
            'Número de Crédito',
            'Valor',
            'Acciones'
        ];

        // Retornamos la vista con las 2 variables creadas anteriormente
        return view('/credito-abono', compact('abonos', 'heads'));
    })->name('credito-abono');

    Route::get('/configuracion', function () {
        return view('configuracion');
    })->name('configuracion');

    Route::get('/cuadrediario', function () {
        return view('cuadrediario');
    })->name('cuadrediario');

    Route::get('/cierrediario', function () {
        return view('cierrediario');
    })->name('cierrediario');

    Route::get('/cerrarperiodo', function () {
        return view('cerrarperiodo');
    })->name('cerrarperiodo');

    Route::get('/liquidaraportes', function () {
        return view('liquidaraportes');
    })->name('liquidaraportes');

    Route::get('/liquidarcreditos', function () {
        return view('liquidarcreditos');
    })->name('liquidarcreditos');

});