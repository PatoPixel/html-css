<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores PHP</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/docs.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style></style>
</head>

<body>
    <?php
    $numPrimero = "1";  // String
    $numSegundo = 1;    // int

    if ($numPrimero == $numSegundo)  {
        echo "Son iguales de contenido! <br>";
    }
    if ($numPrimero === $numSegundo)  {
        echo "Son iguales de contenido + Tipo! <br>";
    }

    // Al usar el PostIncremento, hace una conversión implícita
    $numPrimero++;      // => $numPrimero = $numPrimero + 1
    echo $numPrimero . "<br>";

    $numPrimero--;      // => $numPrimero = $numPrimero - 1
    echo $numPrimero . "<br>";
    
    $numPrimero *= 5;   // => $numPrimero = $numPrimero * 5;
    echo $numPrimero . "<br>";

    ?>
</body>

</html>