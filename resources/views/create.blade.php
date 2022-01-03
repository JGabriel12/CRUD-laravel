@extends('templates.template')

@section('content')
  <h1 class="title text-uppercase text-center mt-4 mb-4">Cadastrar</h1>
  <hr>
 
  <div class="col-8 m-auto mt-4">
    <form name="formCad" id="formCad" method="POST" action="{{url('books/create')}}">
      @csrf
      
      <input class="form-control mt-2" type="text" name="title" id="title" placeholder="Título" required>
      <input class="form-control mt-2" type="text" name="genero" id="genero" placeholder="Gênero" required>
      <input class="form-control mt-2" type="text" name="autor" id="autor" placeholder="Autor" required>

      <input class="btn btn-primary mt-4" type="submit" value="cadastrar">
    </form>
    <a href="{{url("books")}}"><button class="btn btn-success mt-5">Voltar</button></a>
  </div>
  
@endsection