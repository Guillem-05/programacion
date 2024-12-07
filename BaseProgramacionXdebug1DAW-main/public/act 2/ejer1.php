<!DOCTYPE html>
<html>
<head>
    <title>Adivina la contraseña</title>
</head>
<body>
    <h1>Adivina la contraseña</h1>
    <?php
    $arr = [1, 2, 3, 4, 5];

    $rondas = [];

    while (count($intentos) > 0) {
        for ($i=0;$i<5;$i++) {

        $j1 = rand(2,12);
        $j2 = rand(2,12);

        if ($j1>$j2){
            $rondas[$i] = 1;
        }
        elseif ($j1 < $j2) {
            $rondas[$i] = 2;
        } 
        else{
            $rondas[$i] = "X";
        }
    }
    var_dump($rondas);   
}
?>
</body>
</html>