<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isapres Chile Asesores</title>
</head>

<body>
    <h1>Nuevo contacto</h1>
    <ul>
        <li>Nombre: {{$extendform->name}}</li>
        <li>Apellido: {{$extendform->last_name}}</li>
        <li>Email: {{$extendform->email}}</li>
        <li>Rut: {{$extendform->rut}}</li>
        <li>Fono cel: {{$extendform->phone}}</li>
        <li>Renta: {{$extendform->salary}}</li>
        <li>Tipo trabajo: {{$extendform->work}}</li>
        <li>Cargas: {{$extendform->responsibilities}}</li>
        <li>Ciudad: {{$extendform->city}}</li>
        <li>Comuna: {{$extendform->commune}}</li>
        <li>Isapre: {{$isapre->name}}</li>
        <li>Mensaje: {{$extendform->message}}</li>
    </ul>
</body>

</html>