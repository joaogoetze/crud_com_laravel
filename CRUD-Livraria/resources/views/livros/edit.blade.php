@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar livro</h1>
    <hr>
    <form action="{{ route('livros-update',['id'=>$livros->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div>
                <label for="titulo">Título</label>
                <input type="text"  value="{{ $livros->titulo }}" name="titulo" placeholder="Digite o título...">
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text"  value="{{ $livros->autor }}" name="autor" placeholder="Digite o autor...">
            </div>
            <div>
                <label for="dataLancamento">Data de Lançamento</label>
                <input type="date"  value="{{ $livros->dataLancamento }}" name="dataLancamento">
            </div>
            <div>
                <label for="genero">Gênero</label>
                <input type="text"  value="{{ $livros->genero }}" name="genero" placeholder="Digite o gênero...">
            </div>
            <div>
                <label for="autor">Páginas</label>
                <input type="text"  value="{{ $livros->numeroPaginas }}" name="numeroPaginas" placeholder="Digite o número de páginas...">
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </div>
</div>

@endsection('content')