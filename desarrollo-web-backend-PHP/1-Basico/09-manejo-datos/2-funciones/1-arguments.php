<?php # arguments.php

function greet($name)
{
    return "Hello $name <br/>";
}

echo greet('Nelson');

# Parametros por referencia, incluye el simbolo ampersand &
$course = 'PHP';
function path(&$course) // Parametro por referencia & cambia el valor de la variable global
{
    $course = 'Laravel';
    echo "$course is a good course. <br/>";
}

path($course);
echo "Variable global: $course <br/>";

# Parámetros predeterminados
function greetings($name = 'Alumno')
{
    return "Hola, $name <br/>";

}

echo greetings();
echo greetings('Nelson');

?>