@extends('layouts.app')

@section('content')

<h1> Livraria </h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      @foreach($livros as $livro)
      <tr>
        <th>{{ $livro->id }}</th>
        <th>{{ $livro->tituloLivro }}</th>
        <th>{{ $livro->autorLivro}}</th>
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



