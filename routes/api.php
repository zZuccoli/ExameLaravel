<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/clientes', [ClienteController::class, 'index']);  // rota principal
Route::post('/clientes', [ClienteController::class, 'store']); // Mandar para o banco de dados
Route::get('/clientes/{id}', [ClienteController::class, 'show']);   // Trazer as informaçoes do banco de dados
