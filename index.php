<html>
<head></head>
<body>
    <form action="resultados.php" method="POST">
        <h2>DESTINO TURISTICO</h2>
        <select id="Destino"  size="7" name="Destino[] " multiple>
            <option value="cancun">CANCUN</option>
            <option value="puerto vallarta">PUERTO VALLARTA</option>
            <option value="acapulco">ACAPULCO</option>
            <option value="los cabos">LOS CABOS</option>
            <option value="mazatlan">MAZATLAN</option>
            <option value="huatulco">HUATULCO</option>
            <option value="puerto escondido">PUERTO ESCONDIDO</option>
        </select>
        <H2>ACTIVIDADES TURISTICAS</H2>
        <label for="opcion-1">
            <input type="checkbox" value="BUCEO" id="opcion-1" name="actividades[]">
            BUCEO
        </label><BR><BR>
        <label for="opcion-2">
            <input type="checkbox" value="PASEO_EN_LANCHA" id="opcion-2" name="actividades[]">
            PASEO EN LANCHA
        </label><BR><BR>
        <label for="opcion-3">
            <input type="checkbox" value="VISITA_A_ZONAS_ARQUEOLOGICAS" id="opcion-3" name="actividades[]">
            VISITA A ZONAS ARQUEOLOGICAS
        </label><BR><BR>
        <label for="opcion-4">
            <input type="checkbox" value="SENDERISMO" id="opcion-4" name="actividades[]">
            SENDERISMO
        </label><BR><BR>
        <label for="opcion-5">
            <input type="checkbox" value="PESCA_DEPORTIVA" id="opcion-5" name="actividades[]">
           PESCA DEPORTIVA
        </label><BR><BR>
        <label for="opcion-6">
            <input type="checkbox" value="RECORRIDO_GASTRONOMICO" id="opcion-5" name="actividades[]">
            RECORRIDO GASTRONOMICO
        </label><BR><BR>
        <label for="opcion-7">
            <input type="checkbox" value="VISITA_A_MUSEOS" id="opcion-5" name="actividades[]">
            VISITA MUSEOS
        </label><BR><BR>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>