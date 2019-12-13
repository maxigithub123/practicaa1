@extends('index')


@section('contenido') 

@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
        {{$mensaje}}
    </div>
@endisset


<!--Aqui va el listado -->
<div id="contenidoTodo">
    
    <h1>Hola {{ $name }}</h1>
    <h3>Aqui estan los pokemones actualmente, puedes añadir uno cuando quieras</h3>
            
    @foreach ($pokemones as $pokemon)
    
    <div>
        <p>
            <table class="table">
            <h1>Pokemon : <span>{{$pokemon->nombre}}</span></h1>
            <a href="{{ url('pokemon/'. $pokemon->id) }}" class="btn btn-primary">Ver</a>
            <span>
                 <a href="{{ url('pokemon/'. $pokemon->id . '/edit') }}" class="btn btn-info">Editar</a> 
            </span>
            
            
             
             <span>
                 <br><br>
                     <form action ="{{ url('pokemon/' . $pokemon->id) }}" method="post" class="destroy">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value ="Eliminar" class="btn btn-danger"/>
                 </form>
            </span>
        </p>
    </div>
        <hr>
      
    @endforeach
    
    
        </div>
        
<div class="row">
    <a href="{{url('pokemon/create')}}" class="btn btn-info">Agregar pokemon</a>
</div>





@stop