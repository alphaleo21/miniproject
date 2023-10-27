<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'codeHIveDB';

    $conn = new mysqli($host, $user, $password, $db);

?>