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
        <!-- <link rel="stylesheet" href="css/style.css" media="all" /> -->
		<style>
        body {
        	background: url('images/Air Jordan XII WINGS.jpg');
        	background-repeat: no-repeat;
        	background-size: cover;
        }

        h1 {
            font-family:manospace;
        }

        .catalogue {
        	/*display: block;*/
        	width: 100%;
        }

        .content {
        	/*display: block;*/
        }

        .card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 300px;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		  display: inline-block;
		}

		.details {
			/*background: */
		}

		.price {
		  color: grey;
		  font-size: 22px;
		}

		.card button {
		  border: none;
		  outline: 0;
		  padding: 12px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		}

		.card button:hover {
		  opacity: 0.7;
		}
    </style>
        <h1><img style="width:180px;height:100px;" src="images/Screenshot 2019-10-15 at 10.21.45.png" alt="logo"></h1>
	</head>
	<body style="">
		<!-- Content goes here -->
        <div class="login_section">
	        <form action="registration.php">
	            <!-- <button style="width:400px;height:150px" align="center" type="submit" onclick="location.href='registration.php'" value="go to registration.php">SingUp</button> -->
				<input align="center" style="width:400px; height:350px;"type="submit" name="sign_up" value="sign_up"> 
	        </form>
	        <form action="sign-in.php">
				<input align="center" style="width:400px; height:350px;" type="submit" name="sign_ui" value="sign_in"> 
	        </form>
		</div>
		<div class="catalogue">
			<div class="mens content">
				<div class="product card">
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
					<div class="details">
						<h3>Nike Air Max Plus</h3>
						<p class="price">R1900.00</p>
						<p>The Nike Air Max Plus Men's Shoe keeps the legendary 'Tuned' Air cushioning and energetic design lines of the 1998 original.</p>
					</div>
					<p><button>Details</button></p>
				</div>
				<div class="product card">
					<img src="images/air_max_plus.jpg" alt="Nike Air Max Plus shoes" style="width:100%">
					<div class="details">
						<h3>Nike Air Max Plus</h3>
						<p class="price">R1900.00</p>
						<p>The Nike Air Max Plus Men's Shoe keeps the legendary 'Tuned' Air cushioning and energetic design lines of the 1998 original.</p>
					</div>
					<p><button>Details</button></p>
				</div>
			</div>

		</div>
	</body>
</html>