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
});

Route::fallback(function()
{
    return "Erro de rota!";
});