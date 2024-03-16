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
Route::post('/cadastro-cliente',[ClienteController::class,'cadCliente'])->name('envia-banco-cliente');
Route::get('/mostrarGerenciarCliente',[ClienteController::class,'mostrarGerenciarCliente'])->name('mostrar-gerenciar-cliente');
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente'])->name('gerenciar-cliente');
Route::put('/altera-cliente/{$id}',[ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apaga-cliente/{$id}',[ClienteController::class,'destroy'])->name('apaga-cliente');


Route::get('/cadastro-funcionario', [FuncionarioController::class,'showFormularioFuncionario'])->name('show-Formulario-funcionario');
Route::post('/cadastro-funcionario',[FuncionarioController::class,'cadFuncionario'])->name('envia-banco-funcionario');
Route::get('/gerenciarFuncionario',[FuncionarioController::class,'gerenciarFuncionario'])->name('gerenciar-funcionario');


Route::get('/fazer-reserva',[ReservaController::class,'showFormularioReserva'])->name('show-Formulario-reserva');
Route::post('/fazer-reserva',[ReservaController::class,'cadReserva'])->name('envia-banco-reserva');
Route::get('/gerenciarReserva',[ReservaController::class,'gerenciarReserva'])->name('gerenciar-reserva');



Route::get('/escolher-quarto',[QuartoController::class,'showFormularioQuarto'])->name('show-Formulario-quarto');
Route::post('/escolher-quarto',[QuartoController::class,'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciarQuarto',[QuartoController::class,'gerenciarQuarto'])->name('gerenciar-quarto');
