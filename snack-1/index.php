<?php
$matches = [
    [
        "home team" => "Olimpia Milano",
        "away team" => "Dinamo Sassari",
        "home score" => 102,
        "away score" => 86
    ],
    [
        "home team" => "Universo Treviso",
        "away team" => "Virtus Bologna",
        "home score" => 72,
        "away score" => 98
    ],
    [
        "home team" => "Venezia",
        "away team" => "Varese",
        "home score" => 86,
        "away score" => 77
    ],
    [
        "home team" => "Fortitudo Bologna",
        "away team" => "Cremona",
        "home score" => 85,
        "away score" => 71
    ],
    [
        "home team" => "Cantù",
        "away team" => "Brescia",
        "home score" => 89,
        "away score" => 92
    ],
    [
        "home team" => "Trieste",
        "away team" => "Trento",
        "home score" => 92,
        "away score" => 82
    ],

];

/* var_dump($matches); */

for($i=0;$i<count($matches);$i++) {
    echo $i+1 . ")  " . 
    $matches[$i]["home team"] . 
    " - " . 
    $matches[$i]["away team"] . 
    " | " . 
    $matches[$i]["home score"] . 
    " - " . 
    $matches[$i]["away score"] . 
    " <br>";
}
?>