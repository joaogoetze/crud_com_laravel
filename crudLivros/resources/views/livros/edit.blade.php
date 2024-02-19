@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar livro</h1>
    <hr>
    <form action="{{ route('livros-update',['id'=>$livros->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="tituloLivro">Título</label>
                <input type="text" class="form-control" value="{{ $livros->tituloLivro }}" name="tituloLivro" placeholder="Digite o título...">
            </div>
            <div class="form-group">
                <label for="autorLivro">Autor</label>
                <input type="text" class="form-control" value="{{ $livros->autorLivro }}" name="autorLivro" placeholder="Digite o autor...">
            </div>
            <div class="form-group">
                <input type="submit" name="submit">
            </div>
        </div>
</div>

@endsection('content')