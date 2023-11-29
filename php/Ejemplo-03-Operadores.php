<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/docs.css">
    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style></style>
</head>

<body>

    <?php
    // Precedencia operadores: Por encima de TODO -> Paréntesis
    // Aritméticos: *(producto) y / (división ) tienen precedencia sobre + (suma) y - (resta) 
    $cuenta = 3 * 3 + 5;
    echo $cuenta . "<br>";
    $cuenta = 6 / 3 - 4;
    echo $cuenta . "<br>";

    // Operadores Aritméticos: -(neg), +, -, *, /, % (módulo)
    $numero = 40 % 6;   // Equivale a resto entero de 40 / 6 => Cociente: 6 y el resto es 4
    echo $numero . "<br>";
    $potencia = 10 ** 3;
    echo $potencia . "<br>";

    // Operador de asignación es "=". Se lee de dcha a izq
    $valor = 15;    // Asigno 15 a la variable valor
    $valor = ($otro = 10) + 5;
    echo $valor . "<br>";   // 15
    echo $otro . "<br>";    // 10

    ?>
</body>

</html>