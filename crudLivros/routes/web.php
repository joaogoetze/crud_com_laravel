<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livrosController;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });


// Route::view('/livros','livros');

//Route::view('/livros', 'livros', ['nomeLivro'=>'Nada de novo no front']);

//Enviando o parâmetro pela url, esse parâmetro já é enviado com uma função
// para a view, o ? faz com que o envio de parâmetros seja opcional, então caso não seja
// enviado um parâmetro não dá erro
// Route::get('/livros/{nomeLivro?}', function($nomeLivro = null){
//     return view('livros',['nomeLivro'=>$nomeLivro]);
// });

//Enviando + de um parâmetro e adicionando condições a eles
// Route::get('/livros/{idLivro?}/{nomeLivro?}', function($idLivro = null, $nomeLivro = null)
// {
//     return view('livros', ['idLivro'=>$idLivro, "nomeLivro"=>$nomeLivro]);
// })->where(['idLivro' => '[0-9]+', 'nomeLivro' => '[a-z]+']);

// Como exibir o conteúdo acima no html
// <p>{{ $idLivro }}</p>
// <p>{{ $nomeLivro }}</p>


//Route::view('/livros','livros');


//Rota com nome definido
// Route::get('/', function()
// {
//     return view('welcome');
// })->name('home-index');

/*
//Como chamar a rota acima:
//<a href="{{ route('home-index' )}}">Clique aqui</a>

//Route::get('/livros', [livrosController::class, 'index']);
*/

//Criar um grupo de rotas
//Todas as rotas que eu criar aqui dentro, terão o prefixo livros
Route::prefix('livros')->group(function(){

    Route::get('/',[LivrosController::class, 'index'])->name('livros-index');

    Route::get('/create',[LivrosController::class, 'create'])->name('livros-create');

    Route::post('/',[LivrosController::class, 'store'])->name('livros-store');

    Route::get('/{id}/edit',[LivrosController::class, 'edit'])->where('id', '[0-9]+')->name('livros-edit');

    Route::put('/{id}',[LivrosController::class, 'update'])->where('id', '[0-9]+')->name('livros-update');

    Route::delete('/{id}',[LivrosController::class, 'destroy'])->where('id', '[0-9]+')->name('livros-destroy');
});

//Trata erros de rota
Route::fallback(function()
{
    return "Erro de rota!";
});


