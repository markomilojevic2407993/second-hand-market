<?php

$conn = mysqli_connect('localhost', 'root', '', 'helth');

function issetEmpty($post)
{
    if (!isset($post) || empty($post)) {
        exit('p!isset and empty incorect');
    }
}
function query($sql)
{
    global $conn;

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        exit('Error: '.mysqli_error($conn));
    }

    return $result;
}
