<?php #expresiones-regulares.php

# Variable
$password = '1234567890';
$regexResult = preg_match('/^[0-9]{6,9}$/', $password);
echo "Regex Result: $regexResult <br/>";

if ($regexResult === 0) {
    # Error Message
    echo 'La clave no cumple con las condiciones del sistema <br/>';
} else {
    # Success Message
    echo 'Clave correcta! <br/>';
}




?>