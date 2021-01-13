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
Route::resource('conta', ContaController::class);
Route::resource('aporte', AporteController::class);
