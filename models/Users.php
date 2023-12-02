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

    public function save()
    {
        global $conn;
        $name = $conn->real_escape_string($this->name);
        $pass = $conn->real_escape_string($this->pass);
        $sql = $conn->query("INSERT INTO user(name, pass) VALUES('$name', '$pass')");
    }
}
