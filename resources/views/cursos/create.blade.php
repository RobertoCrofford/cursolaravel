@extends('layaouts.plantilla')

@section('title','Curos create')

@section('content')
<h1>en esta pagina puedes cear</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf 
<label>
    nombre:
    <br>
    <input type="text" name="name" value="{{old('name')}}" >
</label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

<label>
    descripcion:
    <br>
    <textarea name="descripcion" rows="5">{{old('descripcion')}} </textarea>
</label>

    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
    @enderror

<label>
    Categoria:
    <br>
    <input type="text" name="categoria" value="{{old('categoria')}}" >
</label>

    @error('categoria')
        <br>
        <small>*{{$message}}</small>
    @enderror
<br>
<button type="submit"> Enviar Formulario </button>
</form>
@endsection 


