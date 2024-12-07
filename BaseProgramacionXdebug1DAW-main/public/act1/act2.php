<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Asociación de Vinicultores</title>
</head>
<body>
    <h1>  Asociación de Vinicultores
    </h1>
    <?php
$tipoUva = 'A';
$tamaño = '1';
$precioInicial = 1.00; 

if ($tipoUva === 'A') {
    if ($tamaño === '1') {
        $cargoTipoA = 0.20;
    } else {
        $cargoTipoA = 0.30;
    }
} elseif ($tipoUva === 'B') {
    if ($tamaño === '1') {
        $rebajoTipoB = -0.30;
    } else {
        $rebajoTipoB = -0.50;
    }
}

$precioUva = $precioInicial + $cargoTipoA + $rebajoTipoB;

echo "El precio por kilogramo de la uva $tipoUva de tamaño $tamaño es de €$precioUva";
?>
</body>
</html>