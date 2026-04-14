<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

// prefix - criar um grupo
Route::prefix('/aluno')->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    // 'index' para saber que é a página inicial
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
    // Dentro do grupo aluno / Rota adicionar / Chama a classe Aluno / Função adicionar / Nome da função adicionar - 'aluno.adicionar'
    Route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover'])->name('aluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::get('/consultar', [App\Http\Controllers\AlunoController::class, 'consultar'])->name('aluno.consultar');
});

// Como seria (na teoria) para acessar cada página
// www.xuxa.com.br/aluno/adicionar
// www.xuxa.com.br/aluno/remover
// www.xuxa.com.br/aluno/atualizar
// www.xuxa.com.br/aluno/consultar

// Quando não quiser mandar pra URL - post
// Quando quiser excluir - get ou post (tanto faz)

