<?php

include '../models/conn.php';

issetEmpty($_GET['name']);
issetEmpty($_GET['description']);
issetEmpty($_GET['price']);
issetEmpty($_GET['id']);

$name = $_GET['name'];
$description = $_GET['description'];
$price = $_GET['price'];
$id = $_GET['id'];

$sql = $conn->query("UPDATE proizvod SET name='$name', description='$description', price=$price WHERE id=$id");

header('Location:../profil.php');
