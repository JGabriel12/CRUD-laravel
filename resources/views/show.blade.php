@extends('templates.template')

@section('content')
  <h1 class="title text-uppercase text-center mt-4 mb-4">Vizualizar</h1>
  <hr>
 
  <div class="col-8 m-auto">
    Título: {{$book->title}}<br>
    Gênero: {{$book->genero}}<br>
    Autor: {{$book->autor}}<br>
  </div>
  <a href="{{url("books")}}"><button class="btn btn-success mt-5">Voltar</button></a>
@endsection