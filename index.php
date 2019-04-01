<?php

echo "Hello world from PHP.<pre>";

$i = $j = 0;

while ($j < 10) {
    var_dump($j);
    $j++;
}


do {
    echo "<br>";
    var_dump($i);
    $i++;
} while ($i < 10);


session_start();

$_SESSION['test_first'] = 'session first value';

$_SESSION['second_value'] = 'session second value';
$_SESSION['test_first'] = 'session first changed value';


// session_unset(); 

// // destroy the session 
// session_destroy();

var_dump($_SESSION);