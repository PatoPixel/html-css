<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores PHP</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/docs.css">
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style></style>
</head>

<body>
    <?php

    /*
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', 'errores.log');
    ini_set('display_startup_errors', 1);
    */

    // Bucles indefinidos (no sabemos el número de iteraciones)
    $num = 1;
    while ($num < 10) {
        echo "<p class='text-danger'>$num </p>";
        $num++;
    }

    // achtung!! Esto está PROHIBIDO!!!
    do  {
        echo "<p class='text-success'>$num </p>";
        $num--;
    }while ($num >= 1);

    ?>

    <hr class="text-info">

    <?php
    // Bucles definidos (sabemos el número de iteraciones)
    // (inicilización; condición; )

    for ($num = 1; $num <=10 ; $num++) { 
        echo "<p class='text-info'>$num </p>";
    }

    echo "<hr class='text-danger'>";

    for ($num1 = 1, $num2 = 10; $num1 <=10, $num2 >1 ; $num1++, $num2--) { 
        echo "<p class='text-danger'>$num1 - $num2 </p>";
    }

    echo "<hr class='text-primary'>";

    // Sentencias de modificación de bucle (continue y break)
    // De parte de MANUEL: PROHIBIDO!!!!!
    // Cuenta del 1 al 10 omitiendo el 5
    for ($i=1; $i <=10 ; $i++) { 
        if($i == 5){
            continue;
        }
        echo "<p class='text-primary'>$i </p>";
    }

    echo "<hr class='text-secondary'>";

    // Cuenta del 1 al 10 parando el bucle en el 5
     for ($i=1; $i <=10 ; $i++) { 
        if($i == 5){
            break;
        }
        echo "<p class='text-secondary'>$i </p>";
    }

    ?>
</body>

</html>