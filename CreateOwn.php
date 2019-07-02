<?php
	$db = mysqli_connect("localhost", "root", "", "99toppings");
	
 //-----------------------------------------------------------------------------------------------------------------------

		if(isset($_POST['RegisterUser'])){
			session_start();
			$P1 = mysql_real_escape_string($_POST['Pizza']);
			$P2 = mysql_real_escape_string($_POST['Crust']);
			$P3 = mysql_real_escape_string($_POST['Toppings']);
			
			
			if ($P1 = "s") {
				$sql = "INSERT INTO Ani(PizzaS, PizzaT, PizzaC) VALUES('$P1', '$P2', '$P3')";
				mysqli_query($db, $sql);
				
					header("Location: index.php");			
			}
			else{
				$_SESSION['message'] = "The two Passwords do not match bruh";

			}
			}
		
			?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration - I got 99 Toppings</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
<body style="background-color:#810606;">

</body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php" class="logo"><img src="images/logo.jpg" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
							<li>
								<a href="Menu.php">Menu</a>
							</li>
							<li>
								<a href="Drink.php">Drinks</a>
							</li>
							<li>
								<a href="CreateOwn.php">Create Own</a>
					<li class="menu">
						<a href="Checkout.php">Check Out</a>
					</li>
					<li>
						<a href="Register.php">Register</a>
					</li>
					<li>
						<a href="Login.php">Login</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
						<li><a href="AboutUs.php">About Us</a></li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Come Join the Team!</h1>
				</div>
			</div>
			<header>
	<div class="row">
		
		<h2>Personal Information</h2>

					<ul>
					<form method ="post" action="CreateOwn.php">
					
                  

					<ul>
					<li>
                            <label for="name">
								Pizza:</label><input type="text" class="form-control" name="Pizza">
					</li>			
							<label for="Toppings">
								Toppings:</label><input type="text" class="form-control" name="Toppings">
								
					<li>		<label for="Crust">
							Crust:</label><input type="text" class="form-control" name="Crust">
					
							<button type="submit" name ="RegisterUser" class="btn btn-primary form-control">Register</button>
					</form>
			
		</div>
	</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="" class="facebook">Facebook</a>
					<a href="" class="twitter">Twitter</a>
					<a href="" class="googleplus">GP</a>
					<a href="" class="pinterest">Pinterest</a>
				</div>
				<p>&copy; I got 99 Toppings. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
