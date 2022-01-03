@extends('templates.template')

@section('content')
  <h1 class="title text-uppercase text-center mt-4 mb-4">@if(isset($book))Editar @else Cadastrar @endif</h1>
  <hr>
 
  <div class="col-8 m-auto mt-4">

    @if(isset($book))
    <form name="formEdit" id="formEdit" method="POST" action="{{url('books/$book->id')}}">
     
      {{ method_field('put') }}
     @else
      <form name="formCad" id="formCad" method="POST" action="{{url('books/create')}}">
    @endif
    
    {{ csrf_field() }}
      
      <input class="form-control mt-2" type="text" name="title" id="title" placeholder="Título" value="{{$book->title ?? ''}}" required>
      <input class="form-control mt-2" type="text" name="genero" id="genero" placeholder="Gênero" value="{{$book->genero ?? ''}}" required>
      <input class="form-control mt-2" type="text" name="autor" id="autor" placeholder="Autor" value="{{$book->autor ?? ''}}" required>

      <input class="btn btn-primary mt-4" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
    </form>
    <a href="{{url("books")}}"><button class="btn btn-success mt-5">Voltar</button></a>
  </div>
  
@endsection