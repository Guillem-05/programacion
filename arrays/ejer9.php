<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [1, 15, 39, 75, 92];
$difference = 53;
$pairs = [];

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if (abs($array[$i] - $array[$j]) == $difference) {
            $pairs[] = [$array[$i], $array[$j]];
        }
    }
}

print_r($pairs);
?>
</body>
</html>