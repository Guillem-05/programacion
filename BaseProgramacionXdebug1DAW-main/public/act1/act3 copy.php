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
$numeroAlumnos = $_GET["num"];
if ($numeroAlumnos >= 100) {
    $costoAlumno = 65.00;
}
elseif ($numeroAlumnos >= 50 && $numeroAlumnos <= 99) {
    $costoAlumno = 70.00;
}
elseif ($numeroAlumnos >=30 && $numeroAlumnos <= 49){
$costoAlumno = 95.00;
}
elseif ($numeroAlumnos < 30){
    $costoTotal = 4000.00; 
}
$costoTotal = $costoAlumno * $numeroAlumnos + $costoBus;
echo "Cada alumno debe pagar es:" .$costoAlumno;
echo "El coste total es" .$costoTotal;
echo "El coste del bus es:" .$costoBus;
?>



</body>
</html>