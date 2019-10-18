<?php	

	/* if (empty($_GET['product']))
		header("Location: ./index.html");
 */
	require_once 'includes/mysql_connect.php';


	//$id = mysqli_real_escape_string($conn, trim($_GET['product']));
	$q = "SELECT * FROM product WHERE image_url='$_POST[name]'; ";
	$r = mysqli_query($conn, $q);

	
	 if (!$r)
		header("Location: ./index.php");
	else if ($r->num_rows === 0)
		header("Location: ./index.php");

	$product = $r->fetch_assoc();
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title><?php echo $product['name'] ?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/index.css" media="all" />
        <link rel="stylesheet" href="css/product.css" media="all" />
	</head>
	<body>
<<<<<<< HEAD
		<div class="product_container">
			<div class="image container">
					<div class="main_image">
						<img src="<?php echo $product[image_url] ?>" alt="This sneaker is fucking awesome!!!" />
						<!-- <img src="images/ <?php echo product['image'] ?>" alt="This sneaker is fucking awesome!!!" /> -->
					</div>
					<div class="sub_image container">
						<img src="images/Nike_Adapt.jpg" alt="More pictures of this fucken awesome product" />
						<img src="images/Nike_Adapt.jpg" alt="Please buy my product" />
						<img src="images/Nike_Adapt.jpg" alt="I'll show you 1 more pic" />
=======
		<div class="page_wrapper">
        	<div class="logo container">
	        	<h1>
					<img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo">
				</h1>
			</div>
        	<div class="profile_container">
	        	<!-- <div class="login_section <?php if ($_SESSION['user_logged_in'] === true) echo "hide" ?>">
			        <form action="registration.php">
						<input type="submit" name="sign_up" value="Sign up" /> 
			        </form>
			        <form action="sign-in.php">
						<input type="submit" name="sign_ui" value="Login"/> 
			        </form>
				</div> -->
>>>>>>> ecec76cdc2213b70130e6630037d31970103e011

				<div class="logged_in_section <?php if ($_SESSION['user_logged_in'] !== true) echo "hide" ?>">
					<p class="greeting">Welcome <?php echo count($_SESSION['username']) ?></p>
					<div class="logout container">
						<input type="submit" name="logout" value="Logout" />
					</div>
					<div clas="cart_container">
						<div class="icon cart"></div>
						<span id="cart_count" class="item_count"><?php echo count($_SESSION['cart']) ?></span>
						<a href="checkout.php"><button>Proceed to checkout</button></a>
					</div>
				</div>
			</div>
			<div class="product_container">
				<div class="image container">
						<div class="main_image">
							<img src="images/ <?php echo product['image']; ?>" alt="This sneaker is fucking awesome!!!" />
						</div>
						<div class="sub_image container">
							<img src="images/<?php echo product['image']; ?>" alt="More pictures of this fucken awesome product" />
							<img src="images/<?php echo product['image']; ?>" alt="Please buy my product" />
							<img src="images/<?php echo product['image']; ?>" alt="I'll show you 1 more pic" />
						</div>
				</div>
<<<<<<< HEAD
				<div class="form section">
					<form method="POST" action="shopping-cart.php">
						<label>
							<span>SIZE</span>
							<br />
							<div class="custom select">
								<select name="size" class="size" placeholder="Select a size">
									<option value="5" >5</option>
									<option value="6" >6</option>
									<option value="7" >7</option>
									<option value="8" >8</option>
									<option value="9" >9</option>
									<option value="10" >10</option>
									<option value="11" >11</option>
									<option value="12" >12</option>
								</select>
							</div>
						</label>
						<label>
							<span>QTY</span>
							<br/>
							<input type="number" name="qty" class="qty" oninput="this.value = Math.abs(this.value)" />
						</label>
						<br />
							<input type="submit" name="ADD TO CART" value="NIKE_Adapt">
						<input type="hidden" name="product_id" />
					</form>
=======
				<div class="details container">
					<div class="name"><?php echo product['name']; ?></div>
					<div class="price"><?php echo product['price']; ?></div>
					<div class="user_ratings">
						<div class="rating background" title="Our users always love our products" ></div>
					</div>
					<div class="availibility right">Availability: <span class="value">In stock</span></div>
					<div class="code right">Product code: <span class="value">QAT332</span></div>
					<div class="description">
						<?php echo product['description']; ?>
					</div>
					<div class="form section">
						<form action="cart.php" method="POST">
							<label>
								<span>SIZE</span>
								<br />
								<div class="custom select">
									<select name="size" class="size" placeholder="Select a size">
										<option value="5" >5</option>
										<option value="6" >6</option>
										<option value="7" >7</option>
										<option value="8" >8</option>
										<option value="9" >9</option>
										<option value="10" >10</option>
										<option value="11" >11</option>
										<option value="12" >12</option>
									</select>
								</div>
							</label>
							<label>
								<span>QTY</span>
								<br/>
								<input type="number" name="qty" class="qty" oninput="this.value = Math.abs(this.value)" />
							</label>
							<br />
							<button type="button" name="cart" class="cart btn" >ADD TO CART</button>
							<button type="submit" name="checkout" class="checkout btn">CHECKOUT</button>
							<input type="hidden" name="product_id" />
						</form>
					</div>
>>>>>>> 331a15d78f30caf569f33ceff79682f6f22a5a37
				</div>
				
			</div>
		</div>
		<div class="footer">
				<div class="options">
					<a href="#">Join Thanos</a>
					<a href="#">Find A store</a>
					<a href="#">Site feedback</a>
					<a href="#">Contact us</a>
				</div>

				<div class="social_media icons">
					<i class="tw"></i>
					<i class="fb"></i>
					<i class="yt"></i>
					<i class="ig"></i>
				</div>

				<div class="copyright">
					<p>&copy; 2019 Thanos Inc, All rights reserved</p>
					<p>Authors: <a href="https://github.com/mnzolo">mnzolo</a> | <a href="https://github.com/Thokozani7">txaba</a> | <a href="https://github.com/mchocho">mchocho</a></p>
				</div>
		</div>
		<script>
			function add_to_cart() {	// var newName = 'John Smith',
			    xhr = new XMLHttpRequest();

				xhr.open('POST', 'includes/add_to_cart.php?product=' + <?php echo $id; ?> + '');
				xhr.onload = function() {
				    if (xhr.status === 200 && xhr.responseText !== newName) {
				        alert('Something went wrong.  Name is now ' + xhr.responseText);
				    }
				    else if (xhr.status !== 200) {
				        alert('Request failed.  Returned status of ' + xhr.status);
				    } else {
				    	const element = document.getElementById('cart_count');
				    	const num = parseInt(element.innerHTML) + 1;
				    	element.innerHTML = num;
				    }
				};
				xhr.send(encodeURI('name=' + newName));
			}



		</script>
	</body>
</html>
