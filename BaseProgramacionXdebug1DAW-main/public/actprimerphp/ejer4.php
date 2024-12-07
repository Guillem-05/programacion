<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 4 </title>
</head>
<body>
    <h1>Obtener Area</h1>
    <?php
function area_trapecio($base_mayor, $base_menor, $altura) {
    return (($base_mayor + $base_menor) * $altura) / 2;
}
?>
</body>
</html>