<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [1, 3, 3, 8, 4, 3, 2, 3, 3];
$totalSum = array_sum($array);
$halfSum = $totalSum / 2;
$currentSum = 0;
$firstPart = [];
$secondPart = [];

foreach ($array as $value) {
    if ($currentSum + $value <= $halfSum) {
        $firstPart[] = $value;
        $currentSum += $value;
    } else {
        $secondPart[] = $value;
    }
}

echo "Primera parte: ";
print_r($firstPart);
echo "Segunda parte: ";
print_r($secondPart);
?>
</body>
</html>