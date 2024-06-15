<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PilotoController;

Route::get('/', function () {
    return redirect('/pilotos');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'pilotos' => PilotoController::class,
    #produtos => ProdutosController::class
]);

Route::get('/pilotos/delete/{id}', [PilotoController::class,'delete']);