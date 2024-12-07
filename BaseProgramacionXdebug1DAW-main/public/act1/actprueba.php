<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   Registro de Horas Trabajadas  </title>
</head>
<body>
    <h1> Registro de Horas Trabajadas
    </h1>
    <?php
$horasTrabajadas = array(40, 35, 42, 38, 45, 0); 
$horasTotales = array_sum($horasTrabajadas);
$sueldoHora = 15.00; 
$sueldoTotal = $horasTotales * $sueldoHora;

echo "El total de horas trabajadas es de $horasTotales\n";
echo "El sueldo total a recibir es de €$sueldoTotal";
?>


</body>
</html>