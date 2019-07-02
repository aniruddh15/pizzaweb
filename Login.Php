<?php

if(isset($_POST['login']))
{session_start();
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('99toppings') or die(mysql_error());
 $Username=$_POST['Username'];
 $Password=$_POST['Password'];
  $query=mysql_query("SELECT * FROM userbase WHERE Username= '$Username' ");
   $res=mysql_fetch_object($query);

  
   if($res->Password == $Password)
   {
	  
    $_SESSION['Username']=$res->Username;
	$_SESSION['FirstName']= $res->FirstName;
	$_SESSION['LastName']=$res->LastName;
	$_SESSION['Email']=$res->Email;
	$_SESSION['Email']=$res->CCNo;
	$_SESSION['Address']=$res->Address;
	$_SESSION['CCType']=$res->CCType;

	   header('location:Index.php');

   }
   else
   {
    echo'Your entered Username or Password is incorrect';
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
						<li>
						<a href="AboutUs.php">About Us</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Give me them Credentials</h1>
				</div>
			</div>
			<header>
	<div class="row">
		
		<h1>Member Login</h1>


	<div class="row">
			<div align = "middle">
		<h2 class="panel-title">Login</h3>
		
								<form method ="post" action="#">
								Username:<input type="text" class="form-control" name="Username">

                            <label for="Password"></label>
								Password:<input type="Password" class="form-control" name="Password">
							<button type="submit" class="btn btn-primary form-control" name="login">Login</button>
							
							<div align="middle">Problems logging in?  <a href="LoginErrors.php">Please click here</a>
							</div>
					</form>
				
			</div>

	</div>
	<div ><a href="Register.php"><center>Need to Register?</center></a></div>

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
