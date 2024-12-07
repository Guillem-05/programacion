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
function promedio_calificaciones($calificaciones) {
    $suma = 0;
    foreach ($calificaciones as $nota) {
        $suma += $nota;
    }
    $promedio = $suma / count($calificaciones);
    return $promedio;
}
?>

</body>
</html>