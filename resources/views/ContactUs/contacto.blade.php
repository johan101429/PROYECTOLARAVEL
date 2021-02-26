<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Informacion de contactenos</title>
</head>
<body>
    <h2>Solicitud información del Contacto </h2>    
    <ul>
        <li>Nombre: {{ $contact['name']}} </li>
        <li>phone: {{ $contact['phone']}} </li>
        <li>email: {{ $contact['email']}} </li>
        <li>Mensaje: {{ $contact['description']}}  </li>
       
    </ul>
</body>
</html>