<?php #Admin.class.php

require_once "Base.class.php";

class Admin extends Base
{
    public function __construct($name = "Admin")
    {
        $this->name = $name;
    }
}

?>