<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro de Horas Trabajadas  </title>
</head>
<body>
    <h1> Registro de Horas Trabajadas
    </h1>
    <?php
$N = 10; 
$fibonacci = array(0, 1);
$anterior1 = 0;
$anterior2 = 1;

for ($i = 2; $i < $N; $i++) {
    $fibonacci[$i] = $anterior1 + $anterior2;
    $anterior1 = $anterior2;
    $anterior2 = $fibonacci[$i];
}

foreach ($fibonacci as $valor) {
    echo $valor . "\n";
}
?>



</body>
</html>