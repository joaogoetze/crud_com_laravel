@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-sm-6">
  <h1> Livraria nome </h1>
  </div>
  <div class="col-sm-6">
    <a href="{{ route('livros-create') }}">Novo livro</a>
  </div>
<div class="container">
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
</div>

@endsection('content')