@extends('base')


@section('contenido') 

@isset($tipo)
    <div class="alert alert-{{$tipo}}" role="alert">
        {{$mensaje}}
    </div>
@endisset


<!--Aqui va el listado -->

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Fecha de nacimiento</th>
            <th>Email</th>
            <th>Clave</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>IP</th>
            <th>Estado civil</th>
            <th>Sueldo</th>
            <th colspan="3">Acciones</th>
            
        </tr>
    </thead>
    <tfoot></tfoot>
    <tbody>
        @foreach ($clientes as $cliente)
    <tr>
      <th scope="row">{{ $cliente->id }}</th>
      <td>{{$cliente->nombre}}</td>
       <td>{{$cliente->apellidos}}</td>
        <td>{{$cliente->fechaNac}}</td>
         <td>{{$cliente->email}}</td>
         <td>{{$cliente->clave}}</td>
         <td>{{$cliente->telefono}}</td>
         <td>{{$cliente->direccion}}</td>
         <td>{{$cliente->ip}}</td>
         <td>{{$cliente->estadocivil}}</td>
         <td>{{$cliente->sueldo}}</td>
         <td> <a href="{{ url('cliente/'. $cliente->id) }}" class="btn btn-primary">Ver</a> </td>
         <td> <a href="{{ url('cliente/'. $cliente->id . '/edit') }}" class="btn btn-info">Editar</a> </td>
         <td>
             <form action ="{{ url('cliente/' . $cliente->id) }}" method="post" class="destroy">
                @csrf
                @method('DELETE')
                <input type="submit" value ="Eliminar" class="btn btn-danger"/>
             </form>
        </td>
    </tr>
    @endforeach
    </tbody>
    
</table>


<div class="row">
    <a href="{{ url('cliente/create')}}" class="btn btn-info">Agregar cliente</a>
 
</div>


@stop