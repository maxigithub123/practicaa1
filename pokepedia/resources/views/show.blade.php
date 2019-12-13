@extends('base')


@section('contenido') 



<table class="table table-striped table-hover">
    <tr>
        <td>Nombre</td>
        <td>{{ $pokemon ->nombre}}</td>
    </tr>
    
    <tr>
        <td>Estatura</td>
        <td>{{ $pokemon ->estatura}}</td>
    </tr>
    
    <tr>
        <td>Peso</td>
        <td>{{ $pokemon ->peso}}</td>
    </tr>
    
    @foreach($habilidades2 as $habilidad2)
    @foreach($habilidades as $habilidad)
    
    @if($pokemon->id == $habilidad2->idpokemon)
    @if($habilidad2->idhabilidad == $habilidad->id)
        <tr>
        <td>Habilidad</td>
        <td>{{ $habilidad->habilidad}}</td>
        
    </tr>
    
    @endif
    @endif
    
    @endforeach
    @endforeach
    
    
    
    
 
    <tr>
        <td>&nbsp;</td>
        <td class="text-center">
           <a href="{{route('home')}}" class="btn btn-info">Volver a inicio</a>
        </td>
    </tr>
    
    
    
</table>


@stop