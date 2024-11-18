<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = [];
$odd = [];

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $even[] = $array[$i];
    } else {
        $odd[] = $array[$i];
    }
}

print_r($even);
print_r($odd);
?>
</body>
</html>