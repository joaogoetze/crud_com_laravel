@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Cadastre um novo livro</h1>
    <hr>
    <form action="{{ route('livros-store')}}" method="POST">
        @csrf
            <div>
                <label for="titulo">Título</label>
                <input type="text" name="titulo" placeholder="Digite o título...">
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor" placeholder="Digite o autor...">
            </div>
            <div>
                <label for="dataLancamento">Data de Lançamento</label>
                <input type="date" name="dataLancamento">
            </div>
            <div>
                <label for="genero">Genero</label>
                <input type="text" name="genero" placeholder="Digite o genero...">
            </div>
            <div>
                <label for="numeroPaginas">Páginas</label>
                <input type="text"  name="numeroPaginas" placeholder="Digite o número de páginas...">
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
</div>

@endsection('content')