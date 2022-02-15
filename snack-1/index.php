<?php

/* 
Creiamo un array contenente le partite di basket
 di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$championshipRound = [
    [
        "homeTeam" => "Los Angeles Lakers",
        "awayTeam" => "Golden State Warriors",
        "pointsHome" => 105,
        "pointsAway" => 120,
    ],
    [
        "homeTeam" => "Boston Celtics",
        "awayTeam" => "Chicago Bulls",
        "pointsHome" => 135,
        "pointsAway" => 142,
    ],
    [
        "homeTeam" => "Cleveland Cavaliers",
        "awayTeam" => "San Antonio Spurs",
        "pointsHome" => 90,
        "pointsAway" => 91,
    ],
    [
        "homeTeam" => "Toronto Raptors",
        "awayTeam" => "New Yorks Knicks",
        "pointsHome" => 115,
        "pointsAway" => 117,
    ],

];

echo "<ul>";

foreach ($championshipRound as &$value) {
    $homeTeam = $value["homeTeam"];
    $awayTeam = $value["awayTeam"];
    $pointsHome = $value["pointsHome"];
    $pointsAway = $value["pointsAway"];
    echo "<li>  $homeTeam - $awayTeam | <strong> $pointsHome - $pointsAway </strong> </li>";
}

echo "</ul>";
