<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];
$zeroCount = 0;

foreach ($array as $value) {
    if ($value === 0) {
        $zeroCount++;
    }
}

$array = array_filter($array, function($value) {
    return $value !== 0;
});

for ($i = 0; $i < $zeroCount; $i++) {
    $array[] = 0;
}

print_r($array);
?>
</body>
</html>