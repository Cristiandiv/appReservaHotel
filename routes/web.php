<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ClienteController::class,'showHome'])->name('home');

Route::get('/cadastro-cliente', [ClienteController::class,'showFormularioCadastro'])->name('showFormulario-cadastro');
Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioFuncionario'])->name('show-Formulario-funcionario');;
Route::get('/fazer-reserva',[ReservaController::class,'showFormularioReserva'])->name('show-Formulario-reserva');;
Route::get('/escolher-quarto',[QuartoController::class,'showFormularioQuarto'])->name('show-Formulario-quarto');;


Route::post('/cadastro-cliente',[ClienteController::class,'cadCliente'])->name('envia-banco-cliente');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::post('/fazer-reserva',[ReservaController::class,'cadReserva'])->name('envia-banco-reserva');
Route::post('/escolher-quarto',[QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');