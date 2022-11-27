<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Hola bienvenido a Usuarios</h1>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <label for="">Nombres
            <input type="text" name="name">
        </label>

        <label for="">Apellidos</label>
        <input type="text" name="surname">

        <label for="">Email</label>
        <input type="email" name="email">

        <label for="">Pais</label>
        <input type="text" name="country">
        
        <label for="">Fecha</label>
        <input type="date" name="date" value="<?php echo date("Y-m-d");?>">

        <label for="">Teléfono</label>
        <input type="text" name="phone">

        <label for="">Usuario</label>
        <input type="text" name="user">

        <label for="">Contraseña</label>
        <input type="password" name="password">

        <label for="">Confirmar Contraseña</label>
        <input type="password" name="password_confirm">
        
        <label for="">Perfil</label>
        <select name="profile_id" id="">
            @foreach ($profiles as $title=>$id)
                <option value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>

        <label for="">Estado</label>
        <select name="status" id="">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>