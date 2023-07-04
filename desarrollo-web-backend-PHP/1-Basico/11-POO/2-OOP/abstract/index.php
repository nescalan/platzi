<?php #index.php

require_once "Classes/Guest.class.php";
require_once "Classes/User.class.php";
require_once "Classes/Admin.class.php";

$guest = new Guest();
echo $guest->login();

$user = new User("Marco");
echo $user->login();

$admin = new Admin("Papá");
echo $admin->login();

?>