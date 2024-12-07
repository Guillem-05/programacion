<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Compañía Telefónica "Garra Phone"  </title>
</head>
<body>
    <h1> Compañía Telefónica "Garra Phone"
    </h1>
   
    <?php
$duracion = 12; 
$dia = 'domingo';

if ($duracion >= 0 && $duracion <= 5) {
    $costo = 1.00;
} elseif ($duracion >= 5 && $duracion <= 8) {
    $costo = 0.80;
} elseif ($duracion >= 8 && $duracion <= 10) {
    $costo = 0.70;
} else {
    $costo = 0.50;
}

$costoLlamada = $costo * ($duracion - ($duracion >= 5 ? 5 : 0)) * (1 + ($dia === 'domingo' ? 0.03 : ($dia === 'hable' && date('H') >= 12 ? 0.15 : 0.10)));

echo "El costo de la llamada de $duracion minutos es de €$costoLlamada";
?>


</body>
</html>