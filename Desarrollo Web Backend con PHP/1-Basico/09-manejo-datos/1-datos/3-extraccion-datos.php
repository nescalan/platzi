<?php

$data = "Estudio PHP";
$post = "It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

// Extraction of data
$extract = substr($post, 0, 20);
echo "$data <br>";
echo "$extract ...[ver más]";

// String to Array
$lang = "JavaScript, PHP, Laravel";
$tags = explode(', ', $data);
echo "<pre>";
var_dump($tags);

?>