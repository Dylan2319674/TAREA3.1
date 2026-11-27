<?php
echo "<br>Destinos Turisticos: <br>";
$Destino=$_POST['Destino'] ?? [];
foreach($Destino as $dt){
echo "<h3>".$dt."</h3>";
    }
echo "<br> Actividades Turisticas: <br>";
$actividades = $_POST['actividades'] ??[];
foreach($actividades as $ac){
    echo "<h3>".$ac."</h3>";
}
echo "<br> Servicios Adicionales: <br>";
$servicios = $_POST['servicios'] ??[];
foreach($servicios as $sc){
    echo "<h4>".$sc."</h4>";
}
?>