<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 1</title>
</head>
<body>
    <h1>Calcular Promedio de Calificaciones</h1>
   <?php
    $hamburguesas = $_GET["canti"];
    $tipo = $_GET["type"];
    $cantidad=1;
    if ($tipo == "sencillas") {
        $precio = 20.00;
    }
    if ($tipo == "dobles") {
        $precio = 25.00;
    }
    if ($tipo == "triples") {
        $precio = 28.00;
    } 
    if( $cantidad>="1") {
        $preciototal=$hamburguesas*$precio;
    }
echo "tienes que pagar $preciototal";
?>
</body>
</html>