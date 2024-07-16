<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo guardia</title>
</head>
<body>
    {{-- formulario para crear un nuevo guardia --}}
    {{-- <form action="{{ route('guard.store') }}" method="post"> --}}
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nombre">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="levelGuard" placeholder="levelGuard">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="password_confirmation" placeholder="Confirmar Password">
        <input type="text" name="phone" placeholder="Telefono">
        <input type="text" name="address" placeholder="Direccion">
        <input type="text" name="city" placeholder="Ciudad">
        <input type="text" name="state" placeholder="Estado">
        <input type="text" name="zip" placeholder="Codigo Postal">    
        <label for="profilePicture">Foto de perfil</label>
        <input type="file" name="profilePicture" placeholder="profilePicture">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>