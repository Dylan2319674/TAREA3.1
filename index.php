<html>
<head></head>
<body>
    <form action="resultados.php" method="POST">
        <h2>DESTINO TURISTICO</h2>
        <link rel="stylesheet" href="estilos.css">
        <select id="Destino" size="7" name="destinos[]" multiple>
            <option value="CANCUN">CANCUN</option>
            <option value="PUERTO VALLARTA">PUERTO VALLARTA</option>
            <option value="ACAPULCO">ACAPULCO</option>
            <option value="LOS CABOS">LOS CABOS</option>
            <option value="MAZATLAN">MAZATLAN</option>
            <option value="HUATULCO">HUATULCO</option>
            <option value="PUERTO ESCONDIDO">PUERTO ESCONDIDO</option>
        </select>
        <H2>ACTIVIDADES TURISTICAS</H2>
        <label for="opcion-1">
            <input type="checkbox" value="BUCEO" id="opcion-1" name="actividades[]">
            BUCEO
        </label><BR><BR>
        <label for="opcion-2">
            <input type="checkbox" value="PASEO EN LANCHA" id="opcion-2" name="actividades[]">
            PASEO EN LANCHA
        </label><BR><BR>
        <label for="opcion-3">
            <input type="checkbox" value="VISITA A ZONAS ARQUEOLOGICAS" id="opcion-3" name="actividades[]">
            VISITA A ZONAS ARQUEOLOGICAS
        </label><BR><BR>
        <label for="opcion-4">
            <input type="checkbox" value="SENDERISMO" id="opcion-4" name="actividades[]">
            SENDERISMO
        </label><BR><BR>
        <label for="opcion-5">
            <input type="checkbox" value="PESCA DEPORTIVA" id="opcion-5" name="actividades[]">
           PESCA DEPORTIVA
        </label><BR><BR>
        <label for="opcion-6">
            <input type="checkbox" value="RECORRIDO GASTRONOMICO" id="opcion-6" name="actividades[]">
            RECORRIDO GASTRONOMICO
        </label><BR><BR>
        <label for="opcion-7">
            <input type="checkbox" value="VISITA A MUSEOS" id="opcion-7" name="actividades[]">
            VISITA MUSEOS
        </label><BR><BR>
        <h2>SERVICIOS ADICIONALES</h2>
        <label for="opcion-1">
            <input type="checkbox" value="TRANSPORTE AL AEROPUERTO" id="opcion-1" name="servicios[]">
            TRANSPORTE AL AEROPUERTO  
            </label><BR><BR>
        <label for="opcion-2">
            <input type="checkbox" value="DESAYUNO INCLUIDO" id="opcion-2" name="servicios[]">
            DESAYUNO INCLUIDO
            </label><BR><BR>  
        <label for="opcion-3">
            <input type="checkbox" value="HOSPEDAJE DE LUJO" id="opcion-3" name="servicios[]">
            HOSPEDAJE DE LUJO
            </label><BR><BR>  
        <label for="opcion-4">
            <input type="checkbox" value="SEGURO DE VIAJERO" id="opcion-4" name="servicios[]">
            SEGURO DE VIAJERO
            </label><BR><BR>  
        <label for="opcion-5">
            <input type="checkbox" value="RENTA DE AUTOMOVIL" id="opcion-5" name="servicios[]">
            RENTA DE AUTOMOVIL
            </label><BR><BR> 
        <label for="opcion-6">
            <input type="checkbox" value="GUIA TURISTICO" id="opcion-6" name="servicios[]">
            GUIA TURISTICO  
            </label><BR><BR>

        <h2>DATOS DEL CLIENTE</h2>
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="correo">Correo electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>