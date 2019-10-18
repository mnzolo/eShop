<?php

try{
    $servername="localhost";
    $username="root";
    $password="123456";
    $dbname="eshop";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
        VALUES ('NIKE_Adapt','images/NIKE_Adapt.jpg', 1900);
    ");

    $conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
VALUES ('Air_jordan 1','images/Air Jordan 1 Retro High.jpg', 1900);
");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
        VALUES ('Air Jordan X','images/Air Jordan XII WINGS.jpg', 1900);
    ");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
VALUES ('Air Jordan 7','/images/Air_Jordan_7_Retro.jpg', 1900);
");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
        VALUES ('Jordan Space','images/air_jordan_space_jam.jpg', 1900);
    ");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
VALUES ('Jordan 1','images/air_jordans.jpg', 1900);
");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
        VALUES ('Jordan 2','images/air_jordans.jpg', 1900);
    ");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
VALUES ('Air Max','images/air_max_plus.jpg', 1900);
");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
        VALUES ('jordan3','images/air-jordan_3.jpg', 1900);
    ");

$conn->exec("INSERT INTO SNEAKERS (brand, image_url, price)
VALUES ('NIKE News','images/Nike News.jpg', 1900);
");
    $conn->commit();
    echo "Data inserted";
}

catch(PDOEXCEPTION $e)
{
    $conn->rollback();
    echo "Erro :".$e->getMessage();
}

$conn=null;
 
?>