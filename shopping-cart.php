<?php
    include ('creatingcart.php')
?>

<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <style>
            .box{
                border: 1px solid black;
            }
            td{
                border: 1px solid black;
            }
            hr{
                color: blue;
            }
            table{
                border-collapse: collapse;
                width:900px;
            }

			td img {
				width:250px;
				height:200px;
			}
        </style>
        <h1><img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo"></h1>
        <h1 align="center" style="font-family: 'Times New Roman', Times, serif;">Check-Out_Cart</h1>
        <hr>
    <head>
    <body syle="background-color:grey; Display: flex;">
        <table class="box" method="post" action="shopping-cart.php">
            <tr>
            <th>product</th>
            <th>Brand</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>price</th>
            </tr>
            <tr>
			<?php
               shopping();
			?>
            </tr>
        </table>
        <input align="right" type="submit" name="CheckOut" value="Checkout">
        <input align="right" type="submit" name="BuyMore" value="BuyMore">
   </body>
</html>
=======
    function  cart()
    {
        $table = array();
        foreach($_SESSION['cart'] as $cart_item) {
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
        echo $table;

    }
    /* closecon(); */
?>
>>>>>>> 331a15d78f30caf569f33ceff79682f6f22a5a37
