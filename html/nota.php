<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$Notas = array();

for ($i = 0; $i < 9; $i++) {
    $numeroAleatorio = rand(1, 10);
    $Notas[] = $numeroAleatorio;
}

foreach($Notas as $nota) {
switch ($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        $texto = "INSUFICIENTE"; 
        break;
    case 5:    
    case 6:
        $texto = "SUFICIENTE"; 
        break;
    case 7:
    case 8;
        $texto = "NOTABLE";
        break;
    default:
        $texto =  "SOBRESALIENTE"; 
        break;
}
echo " $nota  $texto<br>";
}
?>
</body>
</html

