<?php
require_once 'database.php';
// CREATE DATABASE
try {
        // Connect to Mysql server
        $dbh = new PDO($DB_DSN1, $DB_USER, $DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS eshop";
        $dbh->exec($sql);
        echo "Database created successfully<br>";
    } catch (PDOException $e) {
        echo "ERROR CREATING DB: \n".$e->getMessage();
        exit(1);
    }

    // CREATE TABLE USERS
try {
        // Connect to DATABASE previously created
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql to create table
        $sql = "CREATE TABLE IF NOT EXISTS users (
          id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
          Username VARCHAR(50) NOT NULL,
          email VARCHAR(100) NOT NULL,
          passwd VARCHAR(255) NOT NULL
        )";
        $dbh->exec($sql);
        echo "Table USERS created successfully<br>";
    } catch (PDOException $e) {
        echo "ERROR CREATING TABLE: ".$e->getMessage() . "<br>";
    }

// CREATE TABLE PRODUCTS
try {
        // Connect to DATABASE previously created
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS product (
        `image_id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        `name` VARCHAR(255) NOT NULL,
	    `image_url` TEXT(100) NOT NULL,
        `price` VARCHAR(100) NOT NULL
    )";
        $dbh->exec($sql);
    echo "Table PRODUCTS created successfully<br>";
    } catch (PDOException $e) {
        echo "ERROR CREATING TABLE: ".$e->getMessage() ."<br>";
    }
// CREATE TABLE 
try {
        // Connect to DATABASE previously created
        $dbh = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE IF NOT EXISTS orders (
        `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        `username` varchar(200),
        `user_id` varchar(200),
        `image_id` VARCHAR(210),
        `image_url` VARCHAR(100),
        `price` VARCHAR(101)
       )";
    $dbh->exec($sql);
        echo "Table ORDERS created successfully<br>";
    } catch (PDOException $e) {
        echo "ERROR CREATING TABLE: ".$e->getMessage() ."<br>";
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="index_redir">
    <button id="indexbtn" name="inbtn"><a href="../index.php">Index</a></button>
</div>
</body>
</html>