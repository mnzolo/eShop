<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Thanos</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Use inline css -->
	    <!-- <style></style> -->
	    <!-- Or link external file -->
        <link rel="stylesheet" href="css/index.css" media="all" />
		<style>

    </style>
        <h1><img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo"></h1>
	</head>
	<body>
		<!-- Content goes here -->

<<<<<<< HEAD
		<?php 
			//Check if user is logged in


		?>

        <div class="page_wrapper">
        	<div class="login_section">
		        <form action="registration.php">
		            <!-- <button style="width:400px;height:150px" align="center" type="submit" onclick="location.href='registration.php'" value="go to registration.php">SingUp</button> -->
					<input align="center" style="width:400px; height:350px;"type="submit" name="sign_up" value="sign_up" class="<?php if ($_SESSION['user_logged_in'] === true) echo "hide" ?>"> 
		        </form>
		        <form action="sign-in.php">
					<input align="center" style="width:400px; height:350px;" type="submit" name="sign_ui" value="sign_in" class="<?php if ($_SESSION['user_logged_in'] === true) echo "hide" ?>"> 
		        </form>
			</div>
			<div class="catalogue">
				<div class="heading">Mens</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">				
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

				<div class="logged_in_section <?php if ($_SESSION['user_logged_in'] !== true) echo "hide" ?>">
					<p class="greeting">Welcome <?php echo count($_SESSION['username']) ?></p>
					<div class="logout container">
						<input type="submit" name="logout" value="Logout" />
					</div>
					<div clas="cart_container">
						<div class="icon cart"></div>
						<span class="item_count"><?php echo count($_SESSION['cart']) ?></span>
						<a href="checkout.php"><button>Proceed to checkout</button></a>
					</div>
				</div>
			</div>
			<div class="catalogue">
				<div class="heading">Mens</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">

					<!-- <?php 
							require("includes/fetch_mens_sneakers.php");

							if (!empty($mens)) {
								foreach($mens as $item) {
									$str = "";
									$str .= '<div class="product card">';
									$str .= '<img src="images/' . $item['image'] . '" alt="/' . $item['name'] . ' sneakers">';
									$str .= '<div class="details">';
									$str .= '<h3>' . $item['name'] . '</h3>';
									$str .= '<p class="price">' . $item['price'] . '</p>';
									$str .= '</div>';
									$str .= '<p><button><a href="' . $_SERVER['HTTP_HOST'] . '/?products=' . $item['id'] . '"</button><p>';
									$str .= '</div>';

									echo $str;
								}
							}
					?> -->

					<div class="product card">
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
>>>>>>> ecec76cdc2213b70130e6630037d31970103e011
					<div class="product card">
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<form  action = "product.php" method="POST">
						<p><input type="submit" name="images/air_max_plus.jpg" value="Details"></p>
						</form>
					</div>
					<div class="product card">
						<img src="images/air-jordan_3.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordan_space_jam.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordans.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordans_1.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
				</div>


				<div class="heading">Women</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">		
<<<<<<< HEAD
					<?php
						
					?>


					<div class="product card">
						<img src="images/Nike News.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/Nike_Adapt.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jardan9.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jordan1.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jordan2.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
				
				</div>
			</div>

			<div class="heading">All</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">				
					<div class="product card">
						<img src="images/Nike News.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/Nike_Adapt.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jardan9.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jordan1.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/jordan2.jpeg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					
					<div class="product card">
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air-jordan_3.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordan_space_jam.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordans.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
					<div class="product card">
						<img src="images/air_jordans_1.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
=======
					<?php 
							require("includes/fetch_womens_sneakers.php");

							if (!empty($women)) {
								$str = "";
								foreach($women as $item) {
									$str = '<div class="product card">';
									$str .= '<img src="images/' . $item['image'] . '" alt="' . $item['name'] . ' sneakers">';
									$str .= '<div class="details">';
									$str .= '<h3>' . $item['name'] . '</h3>';
									$str .= '<p class="price">' . $item['price'] . '</p>';
									$str .= '</div>';
									$str .= '<p><button><a href="' . $_SERVER['HTTP_HOST'] . '/products?' . $item['id'] . '"</button></p>';
									$str .= '</div>';
								}
								echo $str;
							}
					?>
				</div>

				<div class="heading">All</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">

					<?php 
							if (!empty($men) || !empty($women)) {
								foreach(shuffle(array_merge($men, $women)) as $item) {
									$str = "";
									$str .= '<div class="product card">';
									$str .= '<img src="images/' . $item['image'] . '" alt="' . $item['name'] . ' sneakers">';
									$str .= '<div class="details">';
									$str .= '<h3>' . $item['name'] . '</h3>';
									$str .= '<p class="price">' . $item['price'] . '</p>';
									$str .= '</div>';
									$str .= '<p><button><a href="' . $_SERVER['HTTP_HOST'] . '/products?' . $item['id'] . '"</button></p>';
									$str .= '</div>';

									echo $str;
								}
							}
					?>	
>>>>>>> ecec76cdc2213b70130e6630037d31970103e011
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
					<p>Authors: <a href="https://github.com/mchocho">mchocho</a> | <a href="https://github.com/mnzolo">mnzolo</a> | <a href="https://github.com/Thokozani7">txaba</a></p>
				</div>
		</div>

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>