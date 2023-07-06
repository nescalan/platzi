<?php #return.php


function greet($name)
{
    return "Hello $name <br/>";
}

echo greet('Nelson');

exit(); // detiene el sistema

?>