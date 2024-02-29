@extends('layouts.app')

@section('content')

<h1> Livraria </h1>

<a href="{{ route('livros-create') }}">Adicionar livro</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Data de Lançamento</th>
        <th scope="col">Genero</th>
        <th scope="col">Páginas</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      @foreach($livros as $livro)
      <tr>
        <th>{{ $livro->id }}</th>
        <th>{{ $livro->titulo}}</th>
        <th>{{ $livro->autor}}</th>
        <th>{{ $livro->dataLancamento}}</th>
        <th>{{ $livro->genero}}</th>
        <th>{{ $livro->numeroPaginas}}</th>
        <th>
          <a href="{{ route('livros-edit', ['id'=>$livro->id]) }}">Editar</a>
          <form action="{{ route('livros-destroy', ['id'=>$livro->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
          </form>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection('content')



