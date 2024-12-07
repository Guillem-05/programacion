<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Cantidades Menores/Igual a Cero y Mayores a Cero </title>
</head>
<body>
    <h1> Cantidades Menores/Igual a Cero y Mayores a Cero
    </h1>
    <?php
$N = 5;
$valores = array(-10, 5, -3, 8, -2);
$menoresIgualCero = 0;
$mayoresCero = 0;

foreach ($valores as $valor) {
    if ($valor <= 0) {
        $menoresIgualCero++;
    } else {
        $mayoresCero++;
    }
}

echo "Valores menores o iguales a cero: $menoresIgualCero\n";
echo "Valores mayores a cero: $mayoresCero\n";
?>



</body>
</html>