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

    echo "<hr class='text-info'>";
    echo "<p class='text-success'>$num </p>";

    */

    // Bucles Foreach sirve para arrays, arrays asociativos, colecciones objetos
    $miarray = array(1,2,3,8,6);
    foreach ($miarray as $num) {
        echo "<p class='text-success'>$num </p>";
    }

    echo "<hr class='text-info'>";

    // Array Unidimensional Asociativo
    $alumno = array(
        "nombre" => "Olga Serrano",
        "edad" => 20,
        "sexo" => true
    );

    // Controlar el booleano (ej: false: Hombre; true: Mujer)
    // Ojo! Legibilidad!!!
    foreach ($alumno as $campo => $valor) {
        if($campo == "sexo" && $valor){
            $valor = "mujer";
        } else if($campo == "sexo" && !$valor){
            $valor = "hombre";
        }

        // MODO VIRGUERO, usando ternarios!
        /*
        $valor = ($campo != "sexo")? $valor: ($valor? "mujer": "hombre");
        */
        
        echo "<p class='text-success'>$campo: $valor </p>";
    }
    ?>
</body>

</html>