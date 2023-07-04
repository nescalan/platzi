<?php #index.php

require_once "Classes\User.class.php";
require_once "Classes\Admin.class.php";

$user = new User("Marco");
$user->type = new Admin("Papá");

echo $user->type->greet();

?>