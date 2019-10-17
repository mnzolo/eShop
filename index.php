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
        
	</head>
	<body style="">
		<!-- Content goes here -->

		<?php 
			//Check if user is logged in


		?>
        <div class="page_wrapper">
        	<h1>
				<img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo">
			</h1>
        	<div class="profile_container">
	        	<!-- <div class="login_section <?php if ($_SESSION['user_logged_in'] === true) echo "hide" ?>"> -->
	        	<div class="login_section">
			        <form action="registration.php">
						<input type="submit" name="sign_up" value="sign_up" /> 
			        </form>
			        <form action="sign-in.php">
						<input type="submit" name="sign_ui" /> 
			        </form>
				</div>

				<!-- <div class="logged_in_section <?php if ($_SESSION['user_logged_in'] !== true) echo "hide" ?>"> -->
				<div class="logged_in_section">
					<p class="greeting">Welcome Thanos<!-- <?php echo count($_SESSION['username']) ?>--></p>
					<div clas="cart_container">
						<i class="icon cart"></i>
						<span class="item_count">(3)<!-- <?php echo count($_SESSION['cart']) ?>--></span>
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
									$str .= '<p><button><a href="' . $_SERVER['HTTP_HOST'] . '/products?' . $item['id'] . '"</button><p>';
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
					<div class="product card">
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
						<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
						<div class="details">
							<h3>Nike Air Max Plus</h3>
							<p class="price">R1900.00</p>
						</div>
						<p><button>Details</button></p>
					</div>
				</div>


				<div class="heading">Women</div>
				<div id="hori_wrapper" class="mens content scrolling-wrapper">		
					<!-- <?php 
							require("includes/fetch_womens_sneakers.php");

							if (!empty($women)) {
								foreach($women as $item) {
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
					?> -->

				<div class="product card">
					

					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
			</div>

			<div class="heading">All</div>
			<div id="hori_wrapper" class="mens content scrolling-wrapper">

			<!-- <?php 
						if (!empty($men) || !empty($women)) {
							foreach(shuffle(array_merge ($men, $women)) as $item) {
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
				?> -->		
				<div class="product card">
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
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