@extends('index')


@section('contenido') 

@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
        {{$mensaje}}
    </div>
@endisset


<!--Aqui va el listado -->
<h1>Blog de pokemones</h1>
<hr>

<div id="contenidoTodo">
            
    @foreach ($pokemones as $pokemon)
    
     <div>
        <p>
            <h1>Pokemon : <span>{{$pokemon->nombre}}</span></h1>
        </p>
            </div>
            
           
        @foreach ($posts as $post)
        @if($pokemon->id == $post->pokemon->id)
            <div>
                <p>
                    <h3>Tema del post : <span>{{$post->tema}}</span></h3>
                </p>
            </div>
            
             <div>
                <p>
                    <h3>Texto del post : <span>{{$post->texto}}</span></h3>
                </p>
            </div>
            
           
                @foreach ($comentarios as $comentario)
                    @if($comentario->post->id == $post->id)
                              <div>
                                <p>
                                    <h4>Comentarios : <span>{{$comentario->texto}}</span></h4>
                                </p>
                            </div>
                    
                    @endif
                @endforeach
                
         @endif         
        @endforeach
        <hr>
        
        
    @endforeach
    <div class="row">
    <a href="{{route('home')}}" class="btn btn-info">Volver a inicio</a>
    </div>
    <br>
    
    <div class="row">
    <a href="{{url('post/create')}}" class="btn btn-info">Agregar Post</a>
</div>
        

        </div>
        
 
        
        



@stop