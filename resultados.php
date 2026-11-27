<?php
$nombre = htmlspecialchars($_POST['nombre'] ?? 'No especificado');
$correo = htmlspecialchars($_POST['correo'] ?? 'No especificado');
echo "<h2>Datos del cliente:</h2>";
echo "<p><strong>Nombre:</strong> " . $nombre . "</p>";
echo "<p><strong>Correo electrónico:</strong> " . $correo . "</p>";

echo "<br><h2>Destinos Turísticos:</h2>";
$destinos = $_POST['destinos'] ?? [];
$totalDestinos = count($destinos);
if ($totalDestinos > 0) {
    foreach ($destinos as $dt) {
        echo "<h3>" . htmlspecialchars($dt) . "</h3>";
    }
} else {
    echo "<p>No seleccionaste ningún elemento</p>";
}
echo "<p><strong>Total de destinos seleccionados:</strong> " . $totalDestinos . "</p>";

// 3. Actividades Turísticas
echo "<br><h2>Actividades Turisticas:</h2>";
$actividades = $_POST['actividades'] ?? [];
$totalActividades = count($actividades);

if ($totalActividades > 0) {
    foreach ($actividades as $ac) {
        echo "<h3>" . htmlspecialchars($ac) . "</h3>";
    }
} else {
    echo "<p>No seleccionaste ningún elemento</p>";
}
echo "<p><strong>Total de actividades seleccionadas:</strong> " . $totalActividades . "</p>";

// 4. Servicios Adicionales
echo "<br><h2>Servicios Adicionales:</h2>";
$servicios = $_POST['servicios'] ?? [];
$totalServicios = count($servicios);

if ($totalServicios > 0) {
    foreach ($servicios as $sc) {
        echo "<h4>" . htmlspecialchars($sc) . "</h4>";
    }
} else {
    echo "<p>No seleccionaste ningún elemento</p>";
}
echo "<p><strong>Total de servicios seleccionados:</strong> " . $totalServicios . "</p>";

// 7. Total general
$totalGeneral = $totalDestinos + $totalActividades + $totalServicios;
echo "<br><h2>Total general de elementos seleccionados: " . $totalGeneral . "</h2>";
?>
