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
    <!-- ESTO NO SE PUEDE HACER!!
    Comentarios del lado del cliente, HTML, CSS y JS
    NOOOOOO!!!!

    $num1 = 10;
    $num2 = 20;
    -->
    <?php

    /*
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', 'errores.log');
    ini_set('display_startup_errors', 1);
    */

    

    $num1 = 10;
    $num2 = 20;

    if ($num1 > $num2) {
        echo "El número " . $num1 . "es mayor que el número $num2" . "<br>";
    } else if ($num1 < $num2) {
        echo "El número $num1 es menor que el número $num2 <br>";
    } else {
        echo "Error en los datos de entrada!";
    }

    /* Definidas 3 variables enteras, decir cual es el mayor, el mediano y el menor
    usando if ... else if... else 
    Se pueden poner 2 condicionales a la vez */
    // Parte Inicial: Variables entrada
    // Ej: Puedo recogerlas con un formulario
    $num1 = 25;
    $num2 = 20;
    $num3 = 15;
    
    // Parte1 Problema -> Definir variables de salida
    $mayor = $mediano = $menor = 1;
    
    // Algoritmo del problema
    // Parte2: El número1 ES EL MAYOR!
    if($num1 > $num2 && $num1 > $num3){
        $mayor = $num1;
        if ($num2 > $num3){        
            $mediano = $num2;
            $menor = $num3;
        } else {
            $mediano = $num3;
            $menor = $num2;
        }
        // Parte3: El número2 ES EL MAYOR!
    } else if ($num2 > $num1 && $num2 > $num3){
        $mayor = $num2;
        if($num1 > $num3) {
            $mediano = $num1;
            $menor = $num3;
        } else {
            $mediano = $num3;
            $menor = $num1;
        }
        // Parte4: El número3 ES EL MAYOR!
    } else  {
        $mayor = $num3;
        if($num1 > $num2) {
            $mediano = $num1;
            $menor = $num2;
        } else {
            $mediano = $num2;
            $menor = $num1;
        }
    }
    // Parte X Problema -> Escribir resultado
    echo "Mayor: $mayor, Mediano: $mediano, Menor: $menor <br>";

    // Versión virguera (del bueno de José Carlos)!
    $num1 = 25;
    $num2 = 20;
    $num3 = 15;
    $min = $max = $num1;
    if ($num2 < $min) {
        $min = $num2;
    }
    if ($num3 < $min) {
        $min = $num3;
    }
    if ($num2 > $max) {
        $max = $num2;
    }
    if ($num3 > $max) {
        $max = $num3;
    }
    // OJO a esta línea porque es donde está la potencia del algoritmo!!
    $med = $num1 + $num2 + $num3 - $min - $max;
    echo "Número Menor: " . $min . "<br>";
    echo "Número Mediano: " . $med . "<br>";
    echo "Número Maximo: " . $max . "<br>";
   

    ?>
</body>

</html>