<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [1, 2, 3, 2, 4, 5, 1, 6, 3];
$duplicates = [];

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] == $array[$j] && !in_array($array[$i], $duplicates)) {
            $duplicates[] = $array[$i];
        }
    }
}

print_r($duplicates);
?>
</body>
</html>