<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    
    $combinaciones=array();
    $_SESSION['tablero'] = $tablero;
    
    //FUNCIONES

  
    function generarCombinaciones(){
        foreach ($colores as $color) {
            foreach ($numeros as $numero) {
                $combinaciones[] = ['color' => $color, 'numero' => $numero];
            }
        }
        
    }
    
    function dibujarTablero($tablero){
        {
            $output = "<table border='1'>";
            foreach ($tablero as $fila) {
                $output .= "<tr>";
                foreach ($fila as $numero) {
                    $output .= "<td>$numero</td>";
                }
                $output .= "</tr>";
            }
            $output .= "</table>";
            return $output;
        }
    }
   
    function tiradaValida($combinacion1, $combinacion2) {
        return $combinacion1['color'] === $combinacion2['color'] || $combinacion1['numero'] === $combinacion2['numero'];
    }

    function tiradaPermitida($filaInicio, $columnaInicio, $filaFin, $columnaFin) {
        return $filaInicio === $filaFin || $columnaInicio === $columnaFin;
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filaInicio = (int)$_POST['filaInicio'];
        $columnaInicio = (int)$_POST['columnaInicio'];
        $filaFin = (int)$_POST['filaFin'];
        $columnaFin = (int)$_POST['columnaFin'];
    
        if (movimientoPermitido($filaInicio, $columnaInicio, $filaFin, $columnaFin)) {
    
            $combinacionInicio = $combinaciones[$tablero[$filaInicio][$columnaInicio]];
            $combinacionFin = $combinaciones[$tablero[$filaFin][$columnaFin]];
    
            if (jugadaValida($combinacionInicio, $combinacionFin)) {
                echo "La jugada es válida.";
            } else {
                echo "La jugada no es válida.";
            }
        } else {
            echo "El movimiento no está permitido.";
        }
    }
    
    echo dibujarTablero($tablero);
    ?>
    
    <form method="post" action="">
        Fila Inicio: <input type="number" name="filaInicio" required><br>
        Columna Inicio: <input type="number" name="columnaInicio" required><br>
        Fila Fin: <input type="number" name="filaFin" required><br>
        Columna Fin: <input type="number" name="columnaFin" required><br>
        <input type="submit" value="Realizar Movimiento">
    </form>  
