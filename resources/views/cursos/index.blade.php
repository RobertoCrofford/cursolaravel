@extends('layaouts.plantilla')

@section('title','Curso')

@section('content')
<h1> bienvenido a la pagina principal curso </h1>
<a href="{{route('cursos.create')}}">crear curso</a>
<ul>
    @foreach ($cursos as $curso) // va corriendo de uno a uno 

    <li>
        <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
    </li>   
    @endforeach
</ul>

    {{$cursos->links()}}
@endsection 

