
<?php
    echo "Opciones elegidas: <br>";
    $Destinos=$_POST['Destinos'] ?? [];
    foreach($Destinos as $destino){
        echo $destino . "<br>";
    }

    $Actividades=$_POST['Actividades'] ?? [];
    foreach($Actividades as $actividad){
        echo $actividad . "<br>";
    }

    $Servicios=$_POST['Servicios'] ?? [];
    foreach($Servicios as $servicio){
        echo $servicio . "<br>";
    }

    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';

    echo "Nombre: " . $nombre;
    echo"<br>";
    echo "Correo: " . $correo;



?>