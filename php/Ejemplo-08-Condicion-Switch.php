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
    
    $cadena = " MENU PRINCIPAL <br>
                1. Sumar <br>
                2. Restar <br>
                3. Salir";
    echo $cadena;

    $opcion = 25;

    switch ($opcion) {
        case 1:
            echo "<p class='text-success'> Has elegido Sumar </p>";
            break;
        case 2:
            echo "<p class='text-danger'> Has elegido Restar </p>";
            break;

        default:
             echo "<p class='text-info'> Has elegido Salir </p>";
            break;
    }

    // NO SIEMPRE hace falta poner un break en un case. Ejemplo:
    $dia = "sábado";

    switch ($dia) {
        case 'lunes':
            case 'martes':    
                case 'miércoles':
                    case 'jueves':
                        case 'viernes':
                            echo "<p class='text-danger'> Toca currar :( </p>";     break;
        case 'sábado':
            case 'domingo':
                echo "<p class='text-success'> Fiesta!!!! ;) </p>";                  break;

        default:
            echo "<p class='text-warning'> Valor incorrecto </p>";
            break;
    }


    ?>
</body>

</html>