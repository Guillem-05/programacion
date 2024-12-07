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
     $numero = $_GET["num"];
     $precio = 200.00 ;
     if ( $numero == "3" ) {
        $precio = 200.00;
     }
     if ( $numero == "5" ) {
        $precio = 150.00;
     }
     if ( $numero == "8" ) {
        $precio = 100.00;
     }
     if ( $numero > "8" ) {
        $precio = 50.00;
     }
$preciototal= $precio * $numero;

echo "Esta cita pagaras $precio";
echo "esto es el total" .$preciototal;
?>
</body>
</html>