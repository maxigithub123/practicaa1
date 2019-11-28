@extends('base')


@section('contenido') 


<form action="{{ url('pokemon') }}" method="post">
    @csrf
    
    
    <input type="text" name="id" placeholder="Introduzca el id"/>
    <br>
    
    <input type="text" name="nombre" placeholder="Introduzca el nombre"/>
    <br>
    
    <input type="text" name="peso" placeholder="Introduzca el peso"/>
    <br>
    
    <input type="text" name="estatura" placeholder="Introduzca el estatura"/>
    <br>
     
    <input type="submit" value="Registrar" class="btn btn-info"/>
    <a href="{{ route('home')}}" class="btn btn-info">Volver</a>

</form>


@stop