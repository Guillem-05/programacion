<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Compañía de Viajes  </title>
</head>
<body>
    <h1> Compañía de Viajes
    </h1>
    <?php
$distancia = 200; 
$tipoAutobus = 'A';
$precioPersona = 0;

if ($tipoAutobus === 'A') {
    $precioPersona = 2.0;
} elseif ($tipoAutobus === 'B') {
    $precioPersona = 2.5;
} elseif ($tipoAutobus === 'C') {
    $precioPersona = 3.0;
}

$costoTotal = $distancia * $precioPersona;

echo "El costo total del viaje es de €$costoTotal";
?>
</body>
</html>