<?php


function generateFibonacci($limitation) {
    $first = 0;
    $second = 1;
    
    echo $first . ' ' . $second;
    
    for ($loop = 0; $loop < $limitation; $loop++) {
        $third = $first + $second;
        echo ' ' . $third;
    
        $first = $second;
        $second = $third;
    }
}

function getFiboRecursive($number) {
    if ($number === 0) {
        return 0;
    } else if  ($number === 1) {
        return 1;
    } else {
        echo "<pre>";
        var_dump($number);
        return (getFiboRecursive($number - 1) + getFiboRecursive($number - 2));
    }
}

for ($i = 0; $i < 10; $i++) {
    getFiboRecursive($i) . ' ';
}

// generateFibonacci(12);