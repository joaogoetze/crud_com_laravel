<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        //dd($jogos);

        return view('livros.index', ['livros'=>$livros]);
    }

    public function create()
    {
        // O "livros" é a pasta
        return view('livros.create');
    }
    
    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect()->route('livros-index');
    }
}