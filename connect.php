<?php

$host = "localhost";
$username = "root";
$password = '';
$db = 'test1';

$conn = mysqli_connect($host, $username, $password, $db);

    if(!$conn)
    {
    die('Error 404' . mysqli_connect_error());

    }

    else{
    echo ' ';

    }

;?>