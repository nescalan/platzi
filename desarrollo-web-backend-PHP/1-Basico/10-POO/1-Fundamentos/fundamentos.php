<?php #fundamentos.php

require_once "./Clases/User.class.php";
require_once "./Clases/Admin.class.php";

$user = new User();
$user->type = new Admin();

echo $user->type->greet();

?>