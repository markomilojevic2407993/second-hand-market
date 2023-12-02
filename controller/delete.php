<?php

include '../models/conn.php';

issetEmpty($_GET['id']);

$id = $_GET['id'];

$sql = $conn->query("DELETE FROM proizvod WHERE id=$id");

header('Location:../profil.php');
