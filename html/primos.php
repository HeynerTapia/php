<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Números Primos</title>
</head>
<body>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }

    function imprimirArray($array) {
        echo "<ul>";
        foreach ($array as $numero) {
            echo "<li>$numero</li>";
        }
        echo "</ul>";
    }

    if (isset($_POST['cantidad'])) {
        $cantidad = (int)$_POST['cantidad'];
        $numeros_primos = [];
        echo "<h2>Resultados:</h2>";
        echo "<p>Números primos generados:</p>";
        echo "<ul>";
        while (count($numeros_primos) < $cantidad) {
            $numero = mt_rand(2, 100);
            if (esPrimo($numero) && !in_array($numero, $numeros_primos)) {
                $numeros_primos[] = $numero;
                echo "<li>$numero</li>";
            }
        }
        echo "</ul>";
        echo "<p><a href=\"\">Volver al formulario</a></p>";
    } else {
        echo '<form method="POST" action="">
            <label for="cantidad">Introduce la cantidad de números:</label>
            <input type="number" id="cantidad" name="cantidad" min="1" required>
            <button type="submit">Verificar</button>
        </form>';
    }
    ?>
</body>
</html>
