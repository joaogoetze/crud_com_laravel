@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1>Cadastre um novo livro</h1>
    <hr>
    <form action="{{ route('livros-store')}}" method="POST">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" placeholder="Digite o título...">
                    @error('titulo')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">    
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control @error('autor') is-invalid @enderror" name="autor" placeholder="Digite o autor...">
                    @error('autor')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="dataLancamento">Data de Lançamento</label>
                    <input type="date" class="form-control @error('dataLancamento') is-invalid @enderror" name="dataLancamento">
                    @error('dataLancamento')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" placeholder="Digite o genero...">
                    @error('genero')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">  
                    <label for="numeroPaginas">Páginas</label>
                    <input type="text" class="form-control @error('numeroPaginas') is-invalid @enderror" name="numeroPaginas" placeholder="Digite o número de páginas...">
                    @error('numeroPaginas')
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="submit" value="Cadastrar">
                </div>
            </div>    
</div>

@endsection('content')