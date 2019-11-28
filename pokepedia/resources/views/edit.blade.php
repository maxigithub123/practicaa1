@extends('base')


@section('contenido') 


@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
        {{$mensaje}}
    </div>
@endisset


<form autocomplete="off" action= "{{ url('pokemon/' . $pokemon->id) }}" method="post" class="">
    @csrf
    @method('PUT')
    
       <div>
             <label for="nombre">Nombre: </label>
             <input type="text" id="nombre" name="nombre" placeholder="Introduce el nombre" value="{{ old('nombre', $pokemon->nombre)}}"/>
                @error('nombre')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror  
     </div>
    
      <div>
             <label for="estatura">Estatura: </label>
             <input type="text" id="estatura" name="estatura" placeholder="Introduce una estatura" value="{{ old('estatura', $pokemon->estatura)}}"/>
             @error('estatura')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
      <div>
            <label for="peso">Peso: </label>
            <input type="text" id="peso" name="peso" placeholder="Introduce un peso" value="{{ old('peso', $pokemon->peso)}}"/>
            @error('peso')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
     
    
    
    <input type="submit" value="Editar"  class="btn btn-info"/>
    <a href="{{route('home')}}" class="btn btn-primary">Volver a inicio</a>
</form>


@stop