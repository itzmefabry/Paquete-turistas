<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
</body>
</html>


<?php
    echo "<h1>Opciones elegidas</h1>";

    echo "<h2>Destinos Turísticos:</h2>";
    echo "_________________________________<br>";
    $Destinos=$_POST['Destinos'] ?? [];
    foreach($Destinos as $destino){
        echo $destino . "<br>";
    }

    echo "<h2>Actividades Turísticas:</h2>";
        echo "_________________________________<br>";

    $Actividades=$_POST['Actividades'] ?? [];
    foreach($Actividades as $actividad){
        echo $actividad . "<br>";
    }

    echo "<h2>Servicios adicionales:</h2>";
        echo "_________________________________<br>";

    $Servicios=$_POST['Servicios'] ?? [];
    foreach($Servicios as $servicio){
        echo $servicio . "<br>";
    }

    echo "<h2>Usuario:</h2>";
        echo "_________________________________<br>";

    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';

    echo "Nombre: " . $nombre;
    echo"<br>";
    echo "Correo: " . $correo;



?>