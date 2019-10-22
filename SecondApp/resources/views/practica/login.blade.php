<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <title>Practica 1</title>
</head>
<body>
    <div id="nav">
    <ul>
        <li><a href="{{url('main')}}">Inicio</a> </li>
        <li><a href="{{url('main')}}">Tienda</a> </li>
        <li><a href="{{url('main')}}">Contacto</a> </li>
        <li><a href="{{url('login')}}">Login</a> </li>
    </ul>
    </div>

    <div id="login">
        <form action="{{url('do/login/')}}" method="post">
            @csrf
            <label for="email">Email :</label><input type="email" name="email" id="email" placeholder="Introduzca su email">
            <br>
            <label for="password">Password :</label><input type="password" name="password" id="password" placeholder="Introduzca su password">
            <br>
            <p><a href="{{url('forgotten')}}">¿Ha olvida su contraseña?</a></p>
            <input type="submit" value="Enviar" id="btEnviar">

        </form>



    </div>


</body>
</html>