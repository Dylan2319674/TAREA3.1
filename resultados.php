<?php
echo "<br>Destinos Turisticos: <br>";
$Destino=$_POST['Destino'];
foreach($Destino as $dt){
echo $dt . "<br>";
    }
echo "<br> Actividades Turisticas: <br>";
$actividades = $_POST['actividades'];
foreach($actividades as $ac){
    echo $ac . "<br>";
}
?>