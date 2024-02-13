<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivrariaController extends Controller
{
    public function index()
    {
        $nomeLivro = "Nada de novo no Front";
        $paginasLivro = 249;
        // dd('Livraria do Joãozinho');
        return view('livraria', ['nomeLivro'=>$nomeLivro, 'paginasLivro'=>$paginasLivro]);
    }
}
