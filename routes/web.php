<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;


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
    return view('welcome');
});

Route::get('livro/novo',[LivrosController::class, 'create']);
Route::post('livro/novo',[LivrosController::class, 'store'])->name('salvar_livro');
Route::get('/livros/ver',[LivrosController::class, 'show']);
Route::get('/livro/del/{id}',[LivrosController::class, 'destroy'])->name('excluir_livro');
Route::get('/livro/edit/{id}',[LivrosController::class, 'edit'])->name('editar_livro');
Route::post('/livro/edit/{id}',[LivrosController::class, 'update'])->name('atualizar_livro');


