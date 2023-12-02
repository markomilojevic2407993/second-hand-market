<?php

include 'models/Products.php';

issetEmpty($_POST['name']);
issetEmpty($_POST['description']);

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$userId = $_POST['userId'];

$newProduct = new Product($name, $description, $price, $userId);
$newProduct->saveProduct();

header('Location:index.php');
