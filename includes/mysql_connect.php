<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "123456";
    $dbName = "eshop";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) OR die('Could not connect MYSQL: ' . mysqli_connect_error() );

//Set the encoding
// mysqli_set_charset($conn, 'utf8');
?>
