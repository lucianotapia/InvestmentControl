<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\CarteiraController;
use App\Http\Controllers\OperacaoController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\AporteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::resource('tipo', TipoController::class);
Route::resource('carteira', CarteiraController::class);
Route::resource('operacao', OperacaoController::class);
Route::resource('aporte', AporteController::class);

// Rota adicionada manualmente, pois o laravel renomeou o parâmetro como "contum"
Route::post('/conta', [ContaController::class, 'store']);
Route::get('/conta', [ContaController::class, 'index']);
Route::get('/conta/create', [ContaController::class, 'create']);
Route::delete('/conta/{idconta}', [ContaController::class, 'destroy']);
Route::patch('/conta/{idconta}', [ContaController::class, 'update']);
Route::get('/conta/{idconta}/edit', [ContaController::class, 'edit']);

//Route::get('/login/senhaunica', [LoginController::class, 'redirectToProvider']);
//Route::get('/logincallback', [LoginController::class, 'handleProviderCallback']);