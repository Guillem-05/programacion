<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 5</title>
</head>
<body>
    <h1>Calcular el Area de la Figura </h1>
    <?php
function area_figura_compuesta($base_rect, $altura_rect, $base_tri, $altura_tri) {
    $area_rect = area_rectangulo($base_rect, $altura_rect);
    $area_tri = ($base_tri * $altura_tri) / 2;
    return $area_rect + $area_tri;
}
?>
</body>
</html>
