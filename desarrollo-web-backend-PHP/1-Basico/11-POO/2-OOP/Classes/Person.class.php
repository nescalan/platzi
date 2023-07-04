<?php #Person.class.php

abstract class Person
{
    public $name;
    public function greet()
    {
        return "Hola {$this->name}";
    }
}

?>