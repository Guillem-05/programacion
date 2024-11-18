<!DOCTYPE html>
<html>
<head>
    <title>ejer array</title>
</head>
<body>
    <h1>ejer array</h1>
    <?php
$notes = [5, 8, 6, 4, 10, 2, 9, 7, 3, 1];
sort($notes);
array_shift($notes); 
array_pop($notes);   

$sum = 0;
$count = 0;

foreach ($notes as $note) {
    if (is_numeric($note)) {
        $sum += $note;
        $count++;
    }
}

$average = $sum / $count;
echo "La media es: $average\n";
?>
</body>
</html>