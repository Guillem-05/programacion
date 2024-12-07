<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ahorro Mensual  </title>
</head>
<body>
    <h1> Ahorro Mensual
    </h1>
    <?php
$ahorroMes = array(
    'enero' => 100.00,
    'febrero' => 150.00,
    'marzo' => 200.00
    
);

$ahorroAnual = 0;
foreach ($ahorroMes as $ahorro) {
    $ahorroAnual += $ahorro;
}

echo "El ahorro anual es de €$ahorroAnual";
?>



</body>
</html>