<?php

/* 
Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
 “Accesso riuscito”, altrimenti “Accesso negato”

*/

$name = $_GET["name"];

$mail = $_GET["mail"];
$age = $_GET["age"];


if (strlen($name) > 3 && strpos($mail, '@',) && strpos($mail, '.') && ctype_digit($age)) {

    echo " <h1> Login Successful </h1>";
} else {

    echo  " <h1> Login Denied </h1>";
}
