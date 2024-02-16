@extends('layouts.app')

@section('content')

<h1> Livraria nome </h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
    </tr>
  </thead>
  <tbody>
    @foreach($livros as $livro)
    <tr>
      <th>{{ $livro->id }}</th>
      <td>{{ $livro->tituloLivro }}</td>
      <td>{{ $livro->autorLivro}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection('content')