<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [
    [1, 5, 8, 5],
    [7, 3, 2, 4],
    [1, 6, 2, 4]
];

$transposed = [];
for ($i = 0; $i < count($array[0]); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        $transposed[$i][$j] = $array[$j][$i];
    }
}

print_r($transposed);
?>
</body>
</html>