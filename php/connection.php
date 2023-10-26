<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'codeHIveDB';

    $conn = mysqli_connect($host, $user, $password, $db);

    if(!$conn){
        die("connection failed ".mysqli_connect_error());
    }

    echo "Connection succes";

    mysqli_close($conn);

?>