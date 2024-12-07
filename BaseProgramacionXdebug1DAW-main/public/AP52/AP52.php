<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>   AP52 </title>
</head>
<body>
    <h1> AP52 
    </h1>

<?php
$meteorologicalData = [
    [
        'station' => 'Catarroja',
        'temperature' => 15,
        'humidity' => 85,
        'atmosphericPressure' => 1024
    ],
    [
        'station' => 'Alzira',
        'temperature' => 35,
        'humidity' => 75,
        'atmosphericPressure' => 1000
    ],
    [
        'station' => 'Almussafes',
        'temperature' => 17,
        'humidity' => 95,
        'atmosphericPressure' => 950
    ],
    [
        'station' => 'Carlet',
        'temperature' => 31,
        'humidity' => 55,
        'atmosphericPressure' => 850
    ]
];

/**
 * Fixes the atmospheric pressure of a given station based on its temperature.
 *
 * @param int $stationIndex The index of the station to fix.
 * @param array $data The array of meteorological data.
 * @return array The corrected array of meteorological data.
 */
function fixPressure(int $stationIndex, array $data): array {
    // Check if the station index is valid
    if (isset($data[$stationIndex])) {
        $temperature = $data[$stationIndex]['temperature'];
        $currentPressure = $data[$stationIndex]['atmosphericPressure'];

        // Calculate the corrected pressure based on temperature
        if ($temperature < 30) {
            $correctedPressure = $currentPressure * 1.15; // 15% more
        } else {
            $correctedPressure = $currentPressure * 1.25; // 25% more
        }

        // Update the atmospheric pressure in the data array
        $data[$stationIndex]['atmosphericPressure'] = $correctedPressure;
    }
    return $data;
}

/**
 * Displays the meteorological data for all stations.
 *
 * @param array $data The array of meteorological data.
 */
function show(array $data): void {
    foreach ($data as $index => $station) {
        echo "Station {$index}: {$station['station']}, Temperature: {$station['temperature']}°C, Humidity: {$station['humidity']}%, Atmospheric Pressure: {$station['atmosphericPressure']} hPa\n";
    }
}

/**
 * Calculates the average temperature of the meteorological stations.
 *
 * @param array $data The array of meteorological data.
 * @return float The average temperature.
 */
function averageTemperature(array $data): float {
    $totalTemperature = 0;
    $stationCount = count($data);

    foreach ($data as $station) {
        $totalTemperature += $station['temperature'];
    }

    return $stationCount > 0 ? $totalTemperature / $stationCount : 0;
}

// Display the initial data
show($meteorologicalData);

// Fix the pressure for a specific station (e.g., station 0 - Catarroja)
$meteorologicalData = fixPressure(0, $meteorologicalData);

// Display the updated data
show($meteorologicalData);

// Calculate and display the average temperature
$averageTemp = averageTemperature($meteorologicalData);
echo "Average Temperature: {$averageTemp}°C\n";
?>
</body>
</html>