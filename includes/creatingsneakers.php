<?php
try
{
    $servername="localhost";
    $username="root";
    $password="123456";
    $dbname="eshop";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="CREATE TABLE SNEAKERS
    (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        brand  varchar(50) NOT NULL,
        image_url varchar(50) NOT NULL,
        price  INT(10) UNSIGNED
    )";

    $conn->exec($sql);
    echo "Table created successfully";
}

catch(PDOEXCEPTION $e) {
    echo "table creation failed"."<br />".$e->getMessage();
}

$conn = null;
?>