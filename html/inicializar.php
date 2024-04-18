<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$array_global = [];
function inicializar_array($numero_de_elementos, $min, $max) {
    global $array_global; 
    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $array_global[] = rand($min, $max); 
    }
}
inicializar_array(10,5,50);
print_r($array_global);
?>
</body>
</html>