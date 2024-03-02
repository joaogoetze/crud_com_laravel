@extends('layouts.app')

@section('content')

<div>
    <h1>Cadastre um novo livro</h1>
    <hr>
    <form action="{{ route('livros-store')}}" method="POST">
        @csrf
            <div>
                <label for="titulo">Título</label>
                <input type="text" class="@error('titulo') is-invalid @enderror" name="titulo" placeholder="Digite o título...">
                @error('titulo')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" class="@error('autor') is-invalid @enderror" name="autor" placeholder="Digite o autor...">
                @error('autor')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="dataLancamento">Data de Lançamento</label>
                <input type="date" class="@error('dataLancamento') is-invalid @enderror" name="dataLancamento">
                @error('dataLancamento')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="genero">Genero</label>
                <input type="text" class="@error('genero') is-invalid @enderror" name="genero" placeholder="Digite o genero...">
                @error('genero')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="numeroPaginas">Páginas</label>
                <input type="text" class="@error('numeroPaginas') is-invalid @enderror" name="numeroPaginas" placeholder="Digite o número de páginas...">
                @error('numeroPaginas')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
</div>

@endsection('content')