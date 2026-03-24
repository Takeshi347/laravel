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

// p - parâmetro          
Route::get('/somar/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'somar']); // a função é somar
Route::get('/multiplicar/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'somar']);
Route::get('/subtrair/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'somar']);
Route::get('/dividir/{p1}/{p2}', [App\Http\Controllers\Principal::class, 'somar']);

Route::get('/produtos', [App\Http\Controllers\Principal::class, 'produtos']);


//www.xuxa.com.br/somar/10/20 - Dessa forma é possível 'capturar' esses valores na função somar

