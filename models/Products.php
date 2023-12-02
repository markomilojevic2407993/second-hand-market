<?php

include 'conn.php';
class Product
{
    public $name;
    public $description;
    public $price;
    public $userId;

    public function __construct($name, $description, $price, $userId)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->userId = $userId;
    }

    public function saveProduct()
    {
        global $conn;
        $name = $conn->real_escape_string($this->name);
        $description = $conn->real_escape_string($this->description);
        $price = $conn->real_escape_string($this->price);
        $userId = $conn->real_escape_string($this->userId);

        $conn->query("INSERT INTO proizvod(name, description ,price ,userId) VALUES('$name', '$description',$price, $userId)");
    }
}
