<?php #User.class.php

require_once "Base.class.php";

class User extends Base
{
    public function __construct($name = "User")
    {
        $this->name = $name;
    }
}

?>