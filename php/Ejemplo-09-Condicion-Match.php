<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Match</title>
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
    
    $nota = 8;

    $mensaje = "salida";
    $mensaje = match (true) {
        ($nota >=9) => "Sobresaliente",
        ($nota >=7) => "Notable",
        ($nota >=6) => "Bien",
        ($nota >=5) => "Aprobado",
        default => "Suspenso"
    };

    if($mensaje != "Suspenso"){
        echo "<p class='text-success'>$mensaje </p>";
    }else {
        echo "<p class='text-danger'>$mensaje </p>";
    }
    
    


    ?>
</body>

</html>