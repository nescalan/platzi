<?php #index.php

interface Person
{
    public function getName();
}

class Admin implements Person
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$admin = new Admin("Administrador");
echo $admin->getName();

?>