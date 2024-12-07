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
    $duracion = $_GET["time"];
    $dia = $_GET["day"];

    if ($duracion >= 0 && $duracion <= 5) {
        $costo = 1.00;
    } elseif ($duracion >= 5 && $duracion <= 8) {
        $costo = 0.80;
    } elseif ($duracion >= 8 && $duracion <= 10) {
        $costo = 0.70;
    } else {
        $costo = 0.50;
    } 
$costollamada = $costo * $duracion + $dia;
echo "$costollamada";
?>


</body>
</html>