<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombres = ["Juan", "María", "José", "Ana", "Pedro", "Laura", "Diego", "Sofía", "Carlos", "Lucía"];
    $apellidos = ["García", "Martínez", "Rodríguez", "Fernández", "López", "Pérez", "González", "Sánchez", "Ramírez", "Torres"];
    
    function generar_nombres($cantidad) {
        global $nombres, $apellidos;
        return array_map(function() use ($nombres, $apellidos) {
            return $nombres[array_rand($nombres)] . " " . $apellidos[array_rand($apellidos)];
        }, range(1, $cantidad));
    }
    $nombres_apellidos = generar_nombres(10);
    print_r($nombres_apellidos);
    ?>
</body>
</html>