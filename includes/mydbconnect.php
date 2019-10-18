<?php
    try{
        $servername = "localhost";
        $username = "root";
        $password = "123456";

        $conn = new PDO("mysql:host=$servername", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="CREATE DATABASE ESHOP";
        echo "created succefully";
        $conn->exec($sql);
    }
    catch (PDOExcepton $e)
    {
        echo "connection failed"."<br />".$e->getMessage();
    }
    $conn=null;
?>