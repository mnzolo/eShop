<?php
<<<<<<< HEAD
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "123456";
    $dbName = "eshop";
=======
>>>>>>> 331a15d78f30caf569f33ceff79682f6f22a5a37

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "123456789";
$dbName = "eshop";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) OR die('Could not connect MYSQL: ' . mysqli_connect_error() );
//Set the encoding

// Create database
// $sql = "CREATE DATABASE eshop";
// if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
/*} else {
    echo "Error creating database: " . mysqli_error($conn);
} */

//mysqli_close($conn);
// mysqli_set_charset($conn, 'utf8');
?>
