@extends('layaouts.plantilla')

@section('title','Curos' . $curso->name)

@section('content')
<h1>bienvenido crofford al curso {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}"> Volver a cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}"> Editar Curso</a>
<p><strong>Categoria:</strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection 




