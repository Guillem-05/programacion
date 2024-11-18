<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$array = [1, 2, 2, 3, 3, 3, 4, 4, 5];
$countArray = [];

foreach ($array as $value) {
    if (isset($countArray[$value])) {
        $countArray[$value]++;
    } else {
        $countArray[$value] = 1;
    }
}

print_r($countArray);
?>
</body>
</html>