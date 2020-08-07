<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isapres Chile Asesores</title>
</head>

<body>
    <h1>Se solicita asesoría</h1>
    <ul>
        <li>Nombre: {{$quotation->name}}</li>
        <li>Apellido: {{$quotation->last_name}}</li>
        <li>Rut: {{$quotation->rut}}</li>
        <li>Email: {{$quotation->email}}</li>
        <li>Fono cel: {{$quotation->phone}}</li>
        <li>Ciudad: {{$quotation->city}}</li>
        <li>Isapre: {{$quotation->isapre->name}}</li>
    </ul>
</body>

</html>