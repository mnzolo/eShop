<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Awesome Title</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Use inline css -->
		<style>
				body {
					background: #eeeeee;
				}

				.product_container {
					padding: 150px;
				}
				.container {
					display: inline-block;
					width: 45%;	
				}

				.main_image img {
					width: 80%;
					height: 85%; 
				}
				
				.sub_image {
					width: 70%;
					text-align: center;
					padding-left: 35px;
				}

				.sub_image img {
					width: 30%;
					height: 30%;
					margin: auto;
					padding-right: 10px;
				}

				.details.container {
					position: relative;
					top: -30px;
					height: 45%;
				}
				
				.details .name {
					font-size: 270%;
					position: relative;
					top: 0px;
				}

				.user_ratings {
					display: inline-block;
					vertical-align: middle;
				}

				.user_ratings .rating {
					height: 128px;
					width: 128px;
					background: url('images/5-stars.png');
					-webkit-transform: scale(0.6);
					-ms-transform: scale(0.6);
					transform: scale(0.6)
				}

				.price {
					display: inline-block;
					font-size: 170%;
				}
		
				form {
					margin-top: 6%;
				}
				
				label {
					display: inline-block;
					text-align: center;
				}

				label span {
					font-size: 110%;
				}

				label:first-of-type {
					width: 20%;
					padding-right: 40px;
				}

				.size {
					width: 100%;
					border: none;
					outline: none;
				}

				.description {
					padding-top: 10px;
					font-size: 95%;
					width: 85%;
				}

				.right {
					text-align: right;
					padding-right: 5%;
				}
				
				label input, .size {
					border: none;
					width: 130px;
					height: 20px; 
					margin-top: 2%;
				}

				.btn {
					margin-top: 15px;
					width: 20%;
					padding: 1%;
					background: #000;
					color: #eee;
					border: none;
					margin-left: 65px;
				}

		</style>
	    <!-- Or link external file -->
        <!-- <link rel="stylesheet" href="css/style.css" media="all" /> -->
	</head>
	<body>
		<div class="product_container">
			<div class="image container">
					<div class="main_image">
						<img src="images/Nike_Adapt.jpg" alt="This sneaker is fucking awesome!!!" />
					</div>
					<div class="sub_image container">
						<img src="images/Nike_Adapt.jpg" alt="More pictures of this fucken awesome product" />
						<img src="images/Nike_Adapt.jpg" alt="Please buy my product" />
						<img src="images/Nike_Adapt.jpg" alt="I'll show you 1 more pic" />
					</div>
			</div>
			<div class="details container">
				<div class="name">Nike Adapt V2</div>
				<div class="price">R 1200.00</div>
				<div class="user_ratings">
					<div class="rating background" title="Our users always love our products" ></div>
				</div>
				<div class="availibility right">Availability: <span class="value">In stock</span></div>
				<div class="code right">Product code: <span class="value">QAT332</span></div>
				<div class="description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Scelerisque mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus et. Pellentesque habitant morbi tristique
					senectus. In iaculis nunc sed augue lacus viverra. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium. Porttitor 
					massa id neque aliquam vestibulum morbi blandit cursus. Volutpat ac tincidunt vitae semper quis lectus. Ut venenatis tellus in metus
					vulputate eu. Enim nec dui nunc mattis enim ut tellus elementum. Quis blandit turpis cursus in hac habitasse platea 
					dictumst quisque. Mi tempus imperdiet nulla malesuada. Eu lobortis elementum nibh tellus molestie. Tellus integer feugiat scelerisque
					varius morbi enim nunc.
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
						<input type="button" name="cart" class="cart btn" value="ADD TO CART"/>
						<input type="submit" name="checkout" class="checkout btn" value="CHECKOUT" />
					</form>
				</div>
			</div>
			
		</div>
	</body>
</html>
