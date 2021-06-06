@extends('layaouts.plantilla')

@section('title','Curos edit')

@section('content')
<h1>en esta pagina puedes editar curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf 
    @method('put')
<label>
    nombre:
    <br>
    <input type="text" name="name"  value="{{$curso->name}}">
</label>

<label>
    descripcion:
    <br>
    <textarea name="descripcion" rows="5" >
        {{$curso->descripcion}}
    </textarea>
</label>
<label>
    Categoria:
    <br>
    <input type="text" name="categoria" value="{{$curso->categoria}}" >
</label>
<br>
<button type="submit"> Actualizar Formulario </button>
</form>
@endsection 