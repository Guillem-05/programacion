<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Viaje de Estudios </title>
</head>
<body>
    <h1> Viaje de Estudios
    </h1>
    <?php
$numeroAlumnos = 120; 

if ($numeroAlumnos >= 100) {
    $costoAlumno = 65.00;
} elseif ($numeroAlumnos >= 50 && $numeroAlumnos <= 99) {
    $costoAlumno = 70.00;
} elseif ($numeroAlumnos >= 30 && $numeroAlumnos <= 49) {
    $costoAlumno = 95.00;
} elseif ($numeroAlumnos < 30) {
    $costoAutobus = 4000.00;
}

$costoTotal = $costoAlumno * $numeroAlumnos + $costoAutobus;

echo "Cada alumno debe pagar €$costoAlumno\n";
echo "La compañía de autobuses debe recibir €$costoAutobus\n";
echo "El costo total del viaje es de €$costoTotal";
?>



</body>
</html>