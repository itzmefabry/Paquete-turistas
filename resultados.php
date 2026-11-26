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

    echo "<h2>Destinos Turísticos</h2>";
    echo "<ul>";
    $Destinos = $_POST['Destinos'] ?? [];
    foreach ($Destinos as $destino) {
     echo "<li> $destino </li>";
    }
    echo "</ul>";

    echo "<h2>Actividades Turísticas</h2>";
    echo "<ul>";
    $Actividades = $_POST['Actividades'] ?? [];
    foreach ($Actividades as $actividad) {
        echo "<li> $actividad </li>";
    }
    echo "</ul>";

    echo "<h2>Servicios adicionales</h2>";
    echo "<ul>";
    $Servicios = $_POST['Servicios'] ?? [];
    foreach ($Servicios as $servicio) {

        echo "<li> $servicio </li>";
    }
    echo "</ul>";

    echo "<h2>Datos del cliente</h2>";
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    echo "<p><strong>Nombre:</strong> $nombre </p>";
    echo "<p><strong>Correo:</strong> $correo </p>";
?>