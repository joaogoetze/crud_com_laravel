<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

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

Route::prefix('livros')->group(function()
{
    Route::get('/', [LivroController::class, 'index'])->name('livros-index');

    Route::get('/create', [LivroController::class, 'create'])->name('livros-create');

    Route::post('/',[LivroController::class, 'store'])->name('livros-store');

    Route::get('/{id}/edit',[LivroController::class, 'edit'])->where('id', '[0-9]+')->name('livros-edit');

    Route::put('/{id}',[LivroController::class, 'update'])->where('id', '[0-9]+')->name('livros-update');

    Route::delete('/{id}',[LivroController::class, 'destroy'])->where('id', '[0-9]+')->name('livros-destroy');
});

Route::fallback(function()
{
    return "Erro de rota!";
});