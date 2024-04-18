<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$capitales = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallinn",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valletta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);
ksort($capitales);
foreach ($capitales as $country => $capital) {
    $country_upper = strtoupper($country);
    $capital_upper = strtoupper($capital);
    echo "La capital de $country_upper es $capital_upper<br>\n";
}
$random_key = array_rand($capitales);
$random_country = strtoupper($random_key);
$random_capital = strtoupper($capitales[$random_key]);
echo "<br>\nEl país y su capital al azar: La capital de $random_country es $random_capital";
?>
</body>
</html>