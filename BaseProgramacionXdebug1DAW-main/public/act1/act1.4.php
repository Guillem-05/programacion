<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crustáceo Crujiente</title>
</head>
<body>
    <h1> Crustáceo Crujiente
    </h1>
    <?php
    $zona = $_GET["zone"];
    $peso = $_GET["kg"];
    $zona = $zonas;
    $zonas = [$zona1, $zona2 ,$zona3,$zona4,$zona5];
    $zona1 = 11.00;
    $zona2 = 10.00;
    $zona3 = 12.00; 
    $zona4 = 24.00;
    $zona5 = 27.00;
    if ($peso >= 5 ) {
        echo "El paquete no se va a transportar es un peso no valido con nuestras politicas" .$peso;
    }
    echo "
    1	América	11.00€
    2	África	10.00€
    3	Oceanía	12.00€
    4	Europa	24.00€
    5	Asia	27.00€";
    
?>
</body>
</html>