<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP 9</title>
</head>
<body>
    <h1>Calcular Pulgadas</h1>
   
    <?php
function metros_a_pulgadas($metros) {
    $pulgada = 0.0254; // 1 pulgada = 0.0254 metros
    return $metros / $pulgada;
}
?>
    

</body>
</html>
