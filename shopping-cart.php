<?php
    /* include ("connection.php");
    opencon(); */
    $con = mysqliconnect("localhost","root","","fshop");

    if(mysqliconnecterrno())
    {
        echo "connection failed";
    }

    function  cart()
    {
        foreach($_SESSION['cart'] as $cart_item) {
            $table = array();
            foreach($cart_item as $i => $item) {
                switch($i) {
                    case 'image':
                        $table[0] = '<td><img src="images/' . $item . '" alt="' . $cart_item['name'] . '"></td>';
                        break;
                    case 'name':
                        $table[1] = '<td class="name">' . $item . '</td>';
                        break;
                    case 'size':
                        $table[2] = '<td class="size">' . $item . '</td>';
                        break;
                    case 'quantity':
                        $table[3] = '<td class="Quantity">'. $item . '</td>';
                    case 'price':
                        $table[4] = '<td class="price">'. $item . '</td>';
                }
            }
        }
    }
    /* closecon(); */
?>
