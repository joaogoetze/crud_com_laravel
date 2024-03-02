@extends('layouts.app')

@section('content')

<div>
    <h1>Editar livro</h1>
    <hr>
    <form action="{{ route('livros-update',['id'=>$livros->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div>
                <label for="titulo">Título</label>
                <input type="text" class="@error('titulo') is-invalid @enderror" value="{{ $livros->titulo }}" name="titulo" placeholder="Digite o título...">
                @error('titulo')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" class="@error('autor') is-invalid @enderror"  value="{{ $livros->autor }}" name="autor" placeholder="Digite o autor...">
                @error('autor')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="dataLancamento">Data de Lançamento</label>
                <input type="date" class="@error('dataLancamento') is-invalid @enderror" value="{{ $livros->dataLancamento }}" name="dataLancamento">
                @error('dataLancamento')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="genero">Gênero</label>
                <input type="text" class="@error('genero') is-invalid @enderror" value="{{ $livros->genero }}" name="genero" placeholder="Digite o gênero...">
                @error('genero')
                <div>
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="autor">Páginas</label>
                <input type="text" class="@error('numeroPaginas') is-invalid @enderror" value="{{ $livros->numeroPaginas }}" name="numeroPaginas" placeholder="Digite o número de páginas...">
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
</div>

@endsection('content')