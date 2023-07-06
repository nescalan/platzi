<?php #clousure.php

# Constants, variables and arrays
$message = 'Hello ';
$numbers = [1, 2, 3, 4, 5];

# FUNCTIONS:
$greet = function ($name) use ($message) {
    echo "$message $name";
};

function processNumbers($numbers, $callback)
{
    foreach ($numbers as $number) {
        $result = $callback($number);
        echo "$result <br/>";
    }
}

# Calling closure
$greet('Nelson <br/>');

# Calculate numbers
$calculateSquare = function ($number) {
    return $number * $number;
};

# Calling closure
processNumbers($numbers, $calculateSquare);


?>