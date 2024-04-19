<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos Aleatorios</title>
</head>
<body>
    <h2>Generador de Números Primos Aleatorios</h2>
    <form method="POST" action="">
        <label for="cantidad">Cantidad de Conjuntos:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" value="1" required>
        <label for="iteraciones">Iteraciones por Conjunto:</label>
        <input type="number" id="iteraciones" name="iteraciones" min="1" value="5" required>
        <button type="submit">Generar</button>
    </form>

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

    function generarNumerosPrimos($cantidad, $iteraciones) {
        $resultados = [];
        for ($j = 0; $j < $cantidad; $j++) {
            $numeros_primos = [];
            for ($i = 0; $i < $iteraciones; $i++) {
                $numero_aleatorio = mt_rand(2, 100); // Genera un número aleatorio entre 2 y 100
                $es_primo = esPrimo($numero_aleatorio);
                $numeros_primos[] = array('numero' => $numero_aleatorio, 'es_primo' => $es_primo);
            }
            $resultados[] = $numeros_primos;
        }
        return $resultados;
    }

    if (isset($_POST['cantidad'], $_POST['iteraciones'])) {
        $cantidad = (int)$_POST['cantidad'];
        $iteraciones = (int)$_POST['iteraciones'];

        $resultados = generarNumerosPrimos($cantidad, $iteraciones);

        echo "<h3>Resultados:</h3>";
        foreach ($resultados as $conjunto => $numeros_primos) {
            echo "<h4>Conjunto " . ($conjunto + 1) . ":</h4>";
            echo "<ul>";
            foreach ($numeros_primos as $numero_primo) {
                $numero = $numero_primo['numero'];
                $es_primo = $numero_primo['es_primo'];
                $mensaje = $es_primo ? "es primo" : "no es primo";
                echo "<li>$numero - $mensaje</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
