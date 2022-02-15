<?php

/* 
Passare come parametri GET name, mail e age e verificare
 (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
 “Accesso riuscito”, altrimenti “Accesso negato”

*/

if (key_exists('name', $_GET)) {
    $name = $_GET["name"];
} else {
    
    $name = " <h1> name = empty </h1>";
    echo $name;
}

if (key_exists('mail', $_GET)) {
    $mail = $_GET["mail"];
} else {
    $mail = " <h1> mail = empty </h1>";
    echo $mail;
}

if (key_exists('age', $_GET)) {
    $age = $_GET["age"];
} else {
    $age = " <h1> age = empty </h1>";
    echo $age;
}




if (strlen($name) > 3 && strpos($mail, '@',) && strpos($mail, '.') && ctype_digit($age)) {

    echo " <h1> Login Successful </h1> <h2> $name </h2> <h2> $mail </h2> <h2> $age </h2>";
} else {

    echo  " <h1> Login Denied </h1>";
}
