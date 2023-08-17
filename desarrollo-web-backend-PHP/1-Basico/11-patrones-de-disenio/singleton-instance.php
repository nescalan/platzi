<?php

require_once 'Singleton.class.php';

// This is how yout access to a propierty or method without a instance of a class
$singletonInstance1 = Singleton::getInstance();
$singletonInstance2 = Singleton::getInstance();

// Print message from Singleton Class
echo $singletonInstance1->showMessage();
echo $singletonInstance2->showMessage();

?>