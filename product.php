<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Awesome Title</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/products.css" media="all" />
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
					senectus. In iaculis nunc sed augue lacus viverra. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium.
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
			</div>
			
		</div>
	</body>
</html>
