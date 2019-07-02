<?php
	$db = mysqli_connect("localhost", "root", "", "99toppings");
	
 //-----------------------------------------------------------------------------------------------------------------------

		if(isset($_POST['RegisterUser'])){
			session_start();
			$Username = mysql_real_escape_string($_POST['Username']);
			$Email = mysql_real_escape_string($_POST['Email']);
			$Address = mysql_real_escape_string($_POST['Address']);
			$Password = mysql_real_escape_string($_POST['Password']);
			$Password2 = mysql_real_escape_string($_POST['Password2']);
			$FirstName = mysql_real_escape_string($_POST['FirstName']);
			$LastName = mysql_real_escape_string($_POST['LastName']);
			$CCName = mysql_real_escape_string($_POST['CCName']);
			$CCNo = mysql_real_escape_string($_POST['CCNo']);
			$CCV = mysql_real_escape_string($_POST['CCV']);
			$CCDate = mysql_real_escape_string($_POST['CCDate']);
			$CCType = mysql_real_escape_string($_POST['CCType']);
			
			
			if ($Password = $Password2) {
				$sql = "INSERT INTO Userbase(Username, Email, Password, FirstName, LastName, CCName, CCNo, CCDate, Address, CCV, CCType) VALUES('$Username', '$Email', '$Password', '$FirstName', '$LastName', '$CCName', '$CCNo', '$CCDate', '$Address', '$CCV', '$CCType')";
				mysqli_query($db, $sql);
				$_SESSION['message'] = "You got in bruh";
				$_SESSION['Username'] = $Username;
				$_SESSION['Email'] = $Email;
				$_SESSION['Password'] = $Password;
				$_SESSION['FirstName'] = $FirstName;
				$_SESSION['LastName'] = $LastName;
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
					<form method ="post" action="Register.php">
					
                        <li>   <label for="Email">
								Email: </label><input type="text" class="form-control" name="Email">
						</li>
						<li>
								<label for="FirstName">
								First Name: </label><input type="text" class="form-control" name="FirstName">
						</li>
						<li>
								<label for="LastName">
								Last Name: </label><input type="text" class="form-control" name="LastName">
						</li>
						<li>
								<label for="Address">
								Address: </label><input type="text" class="form-control" name="Address">
						</li>
					</ul>

					<ul>
					<li>
                            <label for="name">
								Username:</label><input type="text" class="form-control" name="Username">
					</li>			
							<label for="Password">
								Password:</label><input type="Password" class="form-control" name="Password">
								
					<li>		<label for="Password">
							Confirm Password:</label><input type="Password" class="form-control" name="Password2">
					</li>
					</ul>
					<ul>
					<h2>Credit Card Input</h2>
					<li>		<label for="CC Name">
								Card Holder's Name</label><input type="text" class="form-control" name="CCName">
					</li>
					<li>		<label for="CreditCard">
								Credit Card No.</label><input type="number" class="form-control" name="CCNo">
					</li>
					<li>		<label for="SecurityCode">
								CCV</label><input type="number" min="111" max="9999" class="form-control" name="CCV">
					
								
					</ul>	
					<ul>
					<li>
					<label for ="CCType">
					Credit Card Type</label><select name="CCType">
					<option value="Amex">American Express</option>
					<option value="Mastercard">Master card</option>
					<option value="Visa">Visa</option>
					</select>
					</li>
					<li><h4>
					
					<label for="Expiration Date">
								Expiration Date</label></h4>
									<input type="date" class="form-control" name="CCDate" min="2017-06-12">
									</li>
									
					</ul>	
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
