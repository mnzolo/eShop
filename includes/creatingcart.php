<?php

    function    shopping()
    {
        require ('mysql_connect.php');

        if($_POST["cart"] == NULL)
        {
            header("location: ../index.html");
        }
        else
        {
            $sql = "SELECT brand, image_url, price";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                $values= $result->fetch_assoc();
                foreach ($values as $item)
                {
                   switch($_POST["cart"])
                    {
                        case ($item["brand"]):
                            echo "<tr><td>".$item["brand"]."</td><td>".$item["image_url"]."</td><td> R ".$item["Price"]."</td><tr>";
                            $total = $total + $item["price"];
                    }
                }
                echo "<br> <br> Total=".$total;
            }
            else
            {
                echo "item not instock";
            }
        }
        $conn->close();
    }
?>