@extends('base')


@section('contenido') 


<form action="{{ url('post') }}" method="post">
    @csrf
    
    
    <!--<input type="text" name="id" placeholder="Introduzca el id del post"/>-->
    <!--<br>-->
    <!--<br>-->
    
    <input type="text" name="tema" placeholder="Introduzca el tema"/>
    <br>
    <br>
    
    <textarea rows="6" cols="40" name="texto">
    </textarea>
    <br>
      <br>
      
    <select name="idpokemon">
         @foreach ($pokemones as $pokemon)
             <option value="{{ $pokemon->id }}" @if (old('id') == $pokemon->id) selected @endif >{{ $pokemon->nombre}} </option>
         @endforeach
    </select>
    
    <!--<select name="iduser">-->
    <!--     @foreach ($users as $user)-->
    <!--         <option value="{{ $user->id }}" @if (old('id') == $user->id) selected @endif >{{ $user->name}} </option>-->
    <!--     @endforeach-->
    <!--</select>-->
    
    
    <label for="iduser">Su id</label>
    <input type="text" name="iduser" value = "{{Auth::user()->id}}"/>
    
    <br>
    <br>
     
    <input type="submit" value="Registrar" class="btn btn-info"/>
    <a href="{{ route('indexPost')}}" class="btn btn-info">Volver</a>

</form>


@stop