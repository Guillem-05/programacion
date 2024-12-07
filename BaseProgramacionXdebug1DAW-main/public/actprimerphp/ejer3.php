<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 3 </title>
</head>
<body>
    <h1>Calcular Area Circulo</h1>
    <?php
function area_circulo($radio) {
    $pi = 3.1416;
    return $pi * $radio * $radio;
}
?>
</body>
</html>