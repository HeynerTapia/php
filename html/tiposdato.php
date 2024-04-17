<?php
$nombre = "Pepe";
$edad = 30;
$nota = 7.5;

//variable nombre= string(4) "juan"
ob_start();
var_dump($nombre);
$tiponombre=ob_get_clean();
echo "Variable de nombre es: $tiponombre"; 

ob_start();
var_dump($edad);
$tipoedad=ob_get_clean();
echo "Variable de edad es: $tipoedad"; 

ob_start();
var_dump($nota);
$tiponota=ob_get_clean();
echo "Variable de nota es: $tiponota"; 
?>