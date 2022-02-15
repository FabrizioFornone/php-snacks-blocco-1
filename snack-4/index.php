<?php

/* 
Creare un array con 15 numeri casuali,
 tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

$newArray = [];

while (count($newArray) < 15) {
    $randomN = rand(1, 20);

    if (!in_array($randomN, $newArray)) {
        $newArray[] = $randomN;
    }
}

foreach ($newArray as &$value) {

    echo "<h3> $value </h3>";
}
