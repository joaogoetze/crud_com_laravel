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

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livro::create($request->all());
        if($request->numeroPaginas <= 0)
        {
            echo "Número de páginas inválido";
        }
        else
        {
            echo "Número de páginas válido";
        }
        //return redirect()->route('livros-index');
    }

    public function edit($id)
    {
        $livros = Livro::where('id', $id)->first();
        if(!empty($livros))
        {
            return view('livros.edit', ['livros'=>$livros]);
        }
        else
        {
            return redirect()->route('livros-index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'dataLancamento' => $request->dataLancamento,
            'genero' => $request->genero,
            'numeroPaginas' => $request->numeroPaginas
        ];

        Livro::where('id',$id)->update($data);
        return redirect()->route('livros-index');
    }

    public function destroy($id)
    {
        Livro::where('id',$id)->delete();
        return redirect()->route('livros-index');
    }
    
}
