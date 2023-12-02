<?php

include '../models/Users.php';

issetEmpty($_POST['name']);
issetEmpty($_POST['pass']);

$name = $_POST['name'];
$pass = $_POST['pass'];

$newUser = new User($name, $pass);

$sql = "INSERT INTO user(name, pass) VALUES('$name', '$pass')";
query($sql);

header('Location:../index.php');
