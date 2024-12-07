<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 6</title>
</head>
<body>
    <h1>Calcular cuanto recibe en un dia </h1>
    <?php
function litros_a_galones($litros, $precio_por_galon) {
    $galon = 3.785; // 1 galón = 3.785 litros
    $cantidad_galones = $litros / $galon;
    $total_pago = $cantidad_galones * $precio_por_galon;
    return $total_pago;
}
?>

    

</body>
</html>
