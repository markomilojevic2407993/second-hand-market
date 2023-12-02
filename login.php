<?php

include 'models/conn.php';

$sql = "SELECT * FROM user WHERE name='$name' AND pass='$pass'";
query($sql);
var_dump($sql);
