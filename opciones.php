<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="recibe_opciones.php" method="POST">

        <label for="Destinos"><h1>Destinos Turísticos</h1></label>

        <select id="Destinos" name="Destinos[] " multiple>
            <option value="cancun">Cancún</option>
            <option value="puertovallarta">Puerto Vallarta</option>
            <option value="acapulco">Acapulco</option>
            <option value="loscabos">Los Cabos</option>
            <option value="mazatlan">Mazatlán</option>
            <option value="huatulco">Huatulco</option>
            <option value="puertoescondido">Puerto Escondido</option>
        </select>

        <br><br>


                <label><h1>Actividades Turísticas</h1></label> 
        <input type="checkbox" value="buceo" name="Actividades[]" > Buceo 
        <input type="checkbox" value="paseolancha" name="Actividades[]" > Paseo en lancha 
        <input type="checkbox" value="zonasarqueologicas" name="Actividades[]" > Visita a zonas arqueológicas 
        <input type="checkbox" value="senderismo" name="Actividades[]" > Senderismo 
        <input type="checkbox" value="pescadeportiva" name="Actividades[]" > Pesca deportiva 
        <input type="checkbox" value="recorridogastronomico" name="Actividades[]" > Recorrido gastronómico 
        <input type="checkbox" value="museos" name="Actividades[]" > Visita a museos

        <br><br>

        <label><h1>Servicios adicionales</h1></label>

        <input type="checkbox" value="transporteaeropuerto" name="Servicios[]"> Transporte al aeropuerto
        <input type="checkbox" value="desayunoincluido" name="Servicios[]"> Desayuno incluido
        <input type="checkbox" value="hospedajelujo" name="Servicios[]"> Hospedaje de lujo
        <input type="checkbox" value="seguroviajero" name="Servicios[]"> Seguro de viajero
        <input type="checkbox" value="rentaautomovil" name="Servicios[]"> Renta de automóvil
        <input type="checkbox" value="guiaturistico" name="Servicios[]"> Guía turístico

        <br>
        <br>

        <label for="nombre"> Nombre completo </label>
        <input type="text" id="nombre" name="nombre">

        <br>

        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo">

        <br>
        <br>

        <button type="submit">Generar paquete</button>

        
    </form>
</body>
</html>