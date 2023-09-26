<?php // phpdoc.php

/** 
 * Esta función retorna dos números sumados
 * @param int $n1
 * @param int $n2
 * @return int
 */
function suma(int $n1, int $n2)
{
    return $n1 + $n2;
}

$resultado = suma(2, 8);
$resultadoDos = suma(7, 13);

echo "El resultado es: $resultado <br>";
echo "El resultado es: $resultadoDos <br>";

?>