@extends('templates.template')

@section('content')
  <h1 class="title text-uppercase text-center mt-4 mb-4">Cadastro de livros</h1>
  <hr>
  <div class="text-center mt-3 mb-4">
    <a href="{{url('books/create')}}"><button class="btn btn-success">Cadastrar</button></a>
  </div>

  <div class="col-8 m-auto">
    <table class="table text-center">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Título</th>
        <th scope="col">Gênero</th>
        <th scope="col">Autor</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($book as $books)
      <tr>
        <th scope="row">{{$books->id}}</th>
        <td>{{$books->title}}</td>
        <td>{{$books->genero}}</td>
        <td>{{$books->autor}}</td>
        <td>
          <a href="{{url("books/$books->id")}}"><button class="btn btn-dark">Vizualizar</button></a>
          <a href="{{"books/$books->id/edit"}}"><button class="btn btn-primary">Editar</button></a>
          <a href="{{"books/$books->id/destroy"}}"><button class="btn btn-danger">Deletar</button></a>
        </td>
      </tr>
      @endforeach()
      
    </tbody>
  </table>
  </div>
@endsection