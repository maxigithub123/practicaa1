@extends('base')


@section('contenido')

@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
        {{$mensaje}}
    </div>
@endisset


<form autocomplete="off" action= "{{ url('cliente') }}" method="post">
    @csrf
    <div>
        <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="nombre" placeholder="Introduce un nombre"/ value="{{ old ('nombre') }}">
     @error('nombre')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror  
    </div>
    
      <div>
             <label for="apellidos">apellidos: </label>
             <input type="text" id="apellidos" name="apellidos" placeholder="Introduce los apellidos"/ value="{{ old ('apellidos') }}">
              @error('apellidos')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
      <div>
            <label for="fechaNac">Fecha nacimiento: </label>
            <input type="text" id="fechaNac" name="fechaNac" placeholder="Introduce una fecha de nacimiento"/ value="{{ old ('fechaNac') }}">
              @error('fechaNac')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
     
      <div>
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="Introduce un email"/ value="{{ old ('email') }}">
            @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
      <div>
            <label for="clave">Clave: </label>
            <input type="text" id="clave" name="clave"  placeholder="Introduce una clave"  value="{{ old ('clave'," ") }}"/>
             @error('clave')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
     <div>
            <label for="telefono">Telefono: </label>
            <input type="text" id="telefono" name="telefono" placeholder="Introduce un telefono" value="{{ old ('telefono'," ") }}"/>
            @error('telefono')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
    <div>
            <label for="direccion">Direccion: </label>
            <input type="text" id="direccion" name="direccion" placeholder="Introduce una direccion" value="{{ old ('direccion',"C/") }}"/>
            @error('direccion')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
    
     
    <div>
            <label for="ip">IP: </label>
            <input type="text" id="ip" name="ip" placeholder="Introduce una ip" value="{{ old ('ip') }}"/>
            @error('ip')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
      
    <div>
            <label for="estadocivil">Estado civil: </label>
            <input type="text" id="estadocivil" name="estadocivil" placeholder="Introduce un estado civil" value="{{ old ('estadocivil'," ") }}"/>
            @error('estadocivil')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
       <div>
            <label for="sueldo">Sueldo: </label>
            <input type="text" id="sueldo" name="sueldo" placeholder="Introduce un sueldo" value="{{ old ('sueldo'," ") }}"/>
            @error('sueldo')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
     </div>
     
     
    
    <input type="submit" value="Registrar"  class="btn btn-info"/>
     <a href="{{route('cliente.index')}}" class="btn btn-info">Volver a inicio</a>
</form>


@stop