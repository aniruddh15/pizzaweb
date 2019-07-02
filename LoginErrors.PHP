<?php
	$db = mysqli_connect("localhost", "root", "", "99toppings");
	
 //-----------------------------------------------------------------------------------------------------------------------

		if(isset($_POST['RegisterUser'])){
			session_start();
			$username = mysql_real_escape_string($_POST['Username']);
			$email = mysql_real_escape_string($_POST['Email']);
			$Address = mysql_real_escape_string($_POST['Address']);
			$Password = mysql_real_escape_string($_POST['Password']);
			$password2 = mysql_real_escape_string($_POST['password2']);
			$firstName = mysql_real_escape_string($_POST['FirstName']);
			$lastName = mysql_real_escape_string($_POST['LastName']);
			$CCName = mysql_real_escape_string($_POST['CCName']);
			$CCNo = mysql_real_escape_string($_POST['CCNo']);
			$CCV = mysql_real_escape_string($_POST['CCV']);
			$CCDate = mysql_real_escape_string($_POST['CCDate']);
			
			
			if ($Password = $password2) {
				$sql = "INSERT INTO Userbase(Username, Email, Password, FirstName, LastName, CCName, CCNo, CCDate, Address, CCV) VALUES('$username', '$email', '$password', '$firstName', '$lastName', '$CCName', '$CCNo', '$CCDate', '$Address', '$CCV')";
				mysqli_query($db, $sql);
				$_SESSION['message'] = "You got in bruh";
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['FirstName'] = $firstName;
				$_SESSION['LastName'] = $lastName;
				$_SESSION['classCode'] = $classCode;
					header("Location: index.php");			
			}
			else{
				$_SESSION['message'] = "The two passwords do not match bruh";

			}
			}
		
			?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - I got 99 Toppings</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
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
						<a href="AboutUs.php">About Us</a>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Let us Help you Out</h1>
				</div>
			</div>
			<header>
	<div align ="center" class="row">
		
			<div class="panel panel-danger"><h3>Looks like you're having trouble logging in!</h3>Please fill out the below and the teacher will be contacted to get you access.		
		
    
    				<form name="helpForm" 
					<form name="helpForm" action="http://www.randyconnolly.com/tests/process.php" onsubmit="validateForm()" method="post">
                            <label for="email"></label>
								Email:<input type="text" class="form-control" name="email">
                            <label for="name"></label>
								Name:<input type="text" class="form-control" name="name">
                            <label for="message"></label>
								Additional Information:<textarea rows="3" class="form-control" name="message" placeholder="Enter message ..."></textarea>
									<button type="submit" class="btn btn-primary form-control">Send</button>
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
