<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['texto'])){
        $texto=$_GET['texto'];
        echo "texto recibido es: ".$texto. "<br>";
    }
    ?>
    <form method="GET" action="">
        <label for="texto"> Introduce u texto </label>
        <input type="text" id="texto" name="texto">
        <button type="submit">enviar</button>
    </form>
</body>
</html>