<?php # formato-datos.php

# Alter string
$string = "Hello World"; // String to alter
$toLowerStr = strtolower($string);
$ucFirstStr = ucfirst($string);

echo "$string <br/>";
echo "$toLowerStr <br/>";
echo "$ucFirstStr <br/>";

# Replace
$replaceString = str_replace("World", "PHP", $string);
echo "Replace: $replaceString <br/>";

# Modify
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_LEFT);

?>