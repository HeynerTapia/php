<?php
// Generar un número aleatorio: 0 o 1
$moneda = rand(0, 1);

// Determinar el resultado: cara o cruz
if ($moneda == 0) {
    // Mostrar imagen de "cara"
    echo '<img src="cara.svg" alt="Cara" width="500" height="500">';
} else {
    // Mostrar imagen de "cruz"
    echo '<img src="cruz.svg" alt="Cruz" width="500" height="500">';
}
?>
