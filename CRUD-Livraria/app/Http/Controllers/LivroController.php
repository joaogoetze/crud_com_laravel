<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::orderBy('id')->get();
        return view('livros.index', ['livros'=>$livros]);
    }
}
