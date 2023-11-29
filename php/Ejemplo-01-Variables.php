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
    /**
     * PHP DOC
     * Métodos (Funciones), para clases (POO), etc
     * Parámetros de Entrada
     * Salida
     */


    # Comentario de 1 línea
    // Comentario de 1 línea Opcion2
    /* Comentario Multilínea
    - Añadido Texto en Rojo con Bootstrap
    - Añadido Icono con FontAwesome
    */
    echo '<p class="text-danger">
    <i class="fa-regular fa-face-smile"></i>
    Hola Mundo</p>';

    // Variables, empezar con $ y letra (o _)
    // No introducir espacios o caracteres especiales!!
    // Asignaciones por valor
    $nomnbre;   // Declaración
    $nombre = "Luis";
    echo $nombre . "<br>";

    // Uso de asignaciones por referencia (&)
    // Ejemplo POR VALOR
    $ciudad1 = "Badajoz";
    $ciudad2 = $ciudad1;
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "-------------- <br>";
    $ciudad2 = "Sevilla";
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "############################" . "<br>";

    // Ejemplo POR REFERENCIA (&)
    $ciudad1 = "Badajoz";
    $ciudad2 = &$ciudad1;
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";
    echo "-------------- <br>";
    $ciudad2 = "Sevilla";
    echo $ciudad1 . "<br>";
    echo $ciudad2 . "<br>";

    // Tipos de variables
    /**
     * a) Numéricos -> int (enteros) y float (coma flotante)
     * b) Cadenas de caracteres -> string
     * c) Booleanos -> bool (true/false)
     * d) Objetos -> object y null (sin objeto)
     * e) Arrays -> Colecciones de datos
     */

    $entero = 10;
    $flotante = 10.1;
    $booleano = true;

    class Coche
    {
        public $marca = "Hyundai";
        public $modelo = "Kona";
        public $potencia = 204;
        public $electrico = true;
    }
    $cocheIvan = new Coche();

    $arreglo = array($entero, $flotante, $booleano, $cocheIvan);
    var_dump($arreglo);
    ?>
</body>

</html>