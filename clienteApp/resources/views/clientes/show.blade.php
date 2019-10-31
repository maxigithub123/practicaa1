@extends('base')


@section('contenido') 

<table class="table table-striped table-hover">
    <tr>
        <td>Nombre</td>
        <td>{{ $cliente ->nombre}}</td>
    </tr>
    
    <tr>
        <td>Apellidos</td>
        <td>{{ $cliente ->apellidos}}</td>
    </tr>
    
    <tr>
        <td>Fecha de nacimiento</td>
        <td>{{ $cliente ->fechaNac}}</td>
    </tr>
    
    <tr>
        <td>Email</td>
        <td>{{ $cliente ->email}}</td>
    </tr>
    
    <tr>
        <td>Clave</td>
        <td>{{ $cliente ->clave}}</td>
    </tr>
    
    <tr>
        <td>Telefono</td>
        <td>{{ $cliente ->telefono}}</td>
    </tr>
    
    <tr>
        <td>Direccion</td>
        <td>{{ $cliente ->direccion}}</td>
    </tr>
    
    <tr>
        <td>IP</td>
        <td>{{ $cliente ->ip}}</td>
    </tr>
    
    <tr>
        <td>Estado civil</td>
        <td>{{ $cliente ->estadocivil}}</td>
    </tr>
    
    <tr>
        <td>sueldo</td>
        <td>{{ $cliente ->sueldo}}</td>
    </tr>
    
    <tr>
        <td>Telefono</td>
        <td>{{ $cliente ->telefono}}</td>
    </tr>
    
    
    <tr>
        <td>&nbsp;</td>
        <td class="text-center">
           <a href="{{route('cliente.index')}}" class="btn btn-info">Volver a inicio</a>
        </td>
    </tr>
    
    
    
</table>


@stop