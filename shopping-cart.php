<?php
    include ('creatingcart.php')
?>

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
