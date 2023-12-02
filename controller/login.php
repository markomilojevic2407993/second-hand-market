<?php

include '../models/conn.php';

issetEmpty($_POST['name']);
issetEmpty($_POST['pass']);

$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = $conn->query("SELECT * FROM user WHERE name='$name' AND pass='$pass'");

if ($sql->num_rows > 0) {
    $sessionUser = $sql->fetch_assoc();
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['user'] = $sessionUser;
    header('Location:../index.php');
} else {
    exit('user undifaind');
}
