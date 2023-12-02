<?php

include 'conn.php';
class User
{
    public $name;
    public $pass;

    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }
}
