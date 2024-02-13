<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrariaController;

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


// Route::view('/livraria','livraria');

//Route::view('/livraria', 'livraria', ['nomeLivro'=>'Nada de novo no front']);

//Enviando o parâmetro pela url, esse parâmetro já é enviado com uma função
// para a view, o ? faz com que o envio de parâmetros seja opcional, então caso não seja
// enviado um parâmetro não dá erro
// Route::get('/livraria/{nomeLivro?}', function($nomeLivro = null){
//     return view('livraria',['nomeLivro'=>$nomeLivro]);
// });

//Enviando + de um parâmetro e adicionando condições a eles
// Route::get('/livraria/{idLivro?}/{nomeLivro?}', function($idLivro = null, $nomeLivro = null)
// {
//     return view('livraria', ['idLivro'=>$idLivro, "nomeLivro"=>$nomeLivro]);
// })->where(['idLivro' => '[0-9]+', 'nomeLivro' => '[a-z]+']);

// Como exibir o conteúdo acima no html
// <p>{{ $idLivro }}</p>
// <p>{{ $nomeLivro }}</p>


//Route::view('/livraria','livraria');


//Rota com nome definido
Route::get('/', function()
{
    return view('welcome');
})->name('home-index');

/*
//Como chamar a rota acima:
//<a href="{{ route('home-index' )}}">Clique aqui</a>

//Trata erros de rota
Route::fallback(function()
{
    return "Erro de rota!";
});
*/

Route::get('/livraria', [LivrariaController::class, 'index']);