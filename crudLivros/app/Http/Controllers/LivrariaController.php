<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivrariaController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        //dd($jogos);

        return view('livros.index', ['livros'=>$livros]);
    }
}
