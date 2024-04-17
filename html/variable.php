<?php
// Dirección IP del servidor donde se ejecuta el script
$ip_servidor = $_SERVER['SERVER_ADDR'];

// Nombre de host del servidor donde se ejecuta el script
$nombre_servidor = $_SERVER['SERVER_NAME'];

// Software del servidor que se está utilizando para servir el script
$software_servidor = $_SERVER['SERVER_SOFTWARE'];

// Información del agente de usuario (user agent) desde el que se solicita el script
$agente_usuario = $_SERVER['HTTP_USER_AGENT'];

// Dirección IP del cliente que solicita el script
$ip_cliente = $_SERVER['REMOTE_ADDR'];

// Mostrar la información obtenida
echo "IP del servidor: $ip_servidor <br>";
echo "Nombre del servidor: $nombre_servidor <br>";
echo "Software del servidor: $software_servidor <br>";
echo "Agente de usuario: $agente_usuario <br>";
echo "IP del cliente: $ip_cliente <br>";
?>
