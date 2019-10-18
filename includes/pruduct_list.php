<?php
    require_once 'mysql_connect.php';

    //MEN
    $q = "INSERT INTO product (name, image_url, price) VALUE ('Nike Air Max Plus', 'images/air_max_plus.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan1', 'images/air-jordan_3.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan2', 'images/air_jordan_space_jam.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan3', 'mages/air_jordans.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan4', 'images/air_jordans_1.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);

    //WOMEN
    $q = "INSERT INTO product (name, image_url, price) VALUE ('Nike1', 'images/Nike News.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('Nike2', 'images/Nike_Adapt.jpg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan5', 'images/jardan9.jpeg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan6', 'images/jordan1.jpeg', 'R1900');";
    $result = mysqli_query($conn, $q);
    $q = "INSERT INTO product (name, image_url, price) VALUE ('jordan7', 'images/jordan2.jpeg', 'R1900');";
    $result = mysqli_query($conn, $q);

    echo "All products have been added!!";

?>