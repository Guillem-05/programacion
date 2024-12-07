<?php
function ejercicio1() {
    $numeros = [];
    for ($i = 0; $i < 5; $i++) {
        $num = (int)readline("Ingrese el número " . ($i + 1) . ": ");
        $numeros[] = $num;
    }
    $media = array_sum($numeros) / count($numeros);
    echo "La media aritmética es: $media\n\n";
}

function ejercicio2() {
    $array1 = [rand(1, 10), rand(1, 10), rand(1, 10)];
    $array2 = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
    
    echo "Array 1: " . implode(", ", $array1) . "\n";
    echo "Array 2: " . implode(", ", $array2) . "\n";
    
    if (count($array1) !== count($array2)) {
        echo "Los arrays no tienen la misma longitud.\n\n";
        return;
    }

    $productos = [];
    for ($i = 0; $i < count($array1); $i++) {
        $productos[] = $array1[$i] * $array2[$i];
    }
    echo "Producto de elementos en la misma posición: " . implode(", ", $productos) . "\n\n";
}


function ejercicio3() {
    $tamaño = (int)readline("Ingrese el tamaño del array de números primos: ");
    $primos = [];
    $numero = 2;

    while (count($primos) < $tamaño) {
        $esPrimo = true;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }
        if ($esPrimo) {
            $primos[] = $numero;
        }
        $numero++;
    }
    echo "Números primos: " . implode(", ", $primos) . "\n\n";
}

function ejercicio4() {
    $dni = (int)readline("Ingrese el número del DNI: ");
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $letra = $letras[$dni % 23];
    echo "La letra del DNI es: $letra\n\n";
}

function ejercicio5() {
    $jugador1 = 0;
    $jugador2 = 0;

    for ($ronda = 0; $ronda < 10; $ronda++) {
        $ganador = "";
        for ($jugador = 1; $jugador <= 2; $jugador++) {
            $lanzamiento = rand(1, 6);
            echo "Jugador $jugador lanza: $lanzamiento\n";
            if ($jugador == 1) {
                $resultado1 = $lanzamiento;
            } else {
                $resultado2 = $lanzamiento;
            }
        }

        if ($resultado1 > $resultado2) {
            $ganador = "Jugador 1";
            $jugador1++;
        } elseif ($resultado2 > $resultado1) {
            $ganador = "Jugador 2";
            $jugador2++;
        } else {
            $ganador = "Empate";
        }
        echo "Ganador de la ronda: $ganador\n\n";
    }

    echo "Jugador 1 ganó $jugador1 rondas.\n";
    echo "Jugador 2 ganó $jugador2 rondas.\n";
    echo "Porcentaje de victorias del Jugador 1: " . ($jugador1 / 10 * 100) . "%\n";
    echo "Porcentaje de victorias del Jugador 2: " . ($jugador2 / 10 * 100) . "%\n\n";
}


function ejercicio6() {
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $fechas = [];

    for ($i = 0; $i < 10; $i++) {
        $mes = rand(0, 11);
        $dia = rand(1, 31);
        $anio = 2018;

    
        if (($mes == 1 && $dia > 28) || ($mes == 3 && $dia > 31) || ($mes == 4 && $dia > 30) || ($mes == 5 && $dia > 31) || ($mes == 6 && $dia > 30) || ($mes == 7 && $dia > 31) || ($mes == 8 && $dia > 31) || ($mes == 9 && $dia > 30) || ($mes == 10 && $dia > 31) || ($mes == 11 && $dia > 30)) {
            $i--; 
            continue;
        }

        $fechas[] = "$dia de " . $meses[$mes] . " de $anio";
    }

    foreach ($fechas as $index => $fecha) {
        echo "Fecha " . ($index + 1) . ": $fecha\n";
    }
    echo "\n";
}

function ejercicio7() {
    $clasificacion = ["Ana", "Oswaldo", "Raúl", "Celia", "María", "Antonio"];
    echo "Clasificación inicial: " . implode(", ", $clasificacion) . "\n";


    $clasificacion[3] = "Celia"; 
    unset($clasificacion[5]); 
    array_splice($clasificacion, 2, 0, ["Roberto", "Amaya"]); 
    array_unshift($clasificacion, "Marta"); /

    echo "Clasificación actualizada: " . implode(", ", $clasificacion) . "\n";
}

ejercicio1();
ejercicio2();
ejercicio3();
ejercicio4();
ejercicio5();
ejercicio6();
ejercicio7();
?>