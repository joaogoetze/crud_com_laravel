@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Cadastre um novo livro</h1>
    <hr>

    <form action="{{ route('livros-store')}}" method="POST">
        @csrf
            <div>
                <label for="titulo">Título</label>
                <input type="text" class = "form-control @error('titulo') is-invalid @enderror" name="titulo" placeholder="Digite o título...">
                @error('titulo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" placeholder="Digite o autor...">
                @error('autor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="dataLancamento">Data de Lançamento</label>
                <input type="date" class="form-control @error('dataLancamento') is-invalid @enderror" name="dataLancamento">
                @error('dataLancamento')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="genero">Genero</label>
                <input type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" placeholder="Digite o genero...">
                @error('genero')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="numeroPaginas">Páginas</label>
                <input type="text"  class="form-control @error('numeroPaginas') is-invalid @enderror" name="numeroPaginas" placeholder="Digite o número de páginas...">
                @error('numeroPaginas')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
</div>

@endsection('content')