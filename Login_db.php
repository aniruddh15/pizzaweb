<?php 

 define('DB_NAME', '99toppings');
 define('DB_USER', 'root');
 define('DB_Password', '');
 define('DB_HOST', 'localhost');
 
 $link = mysql_connect(DB_HOST, DB_USER, DB_Password);

 if(!$link) {
	 die('could not connect homie: ' . mysql_error());
 }
 
 $db_selected = mysql_select_db(DB_NAME, $link);
 
 if(!$db_selected) {
	 die('Can\'t use ' . DB_NAME . ': ' .mysql_error());
 }
 
$Username = $_POST['Username'];
$pw = $_POST['Password'];

$sql = "SELECT * FROM userbase WHERE Username = $Username AND Password = $pw ";
   $result = mysqli_query($link,$sql) or die(mysql_error());
   $numrows = mysql_num_rows($result);
   
       if($numrows > 1)  
    {  
			
			header("location:Index.php");
			exit();
  
    }  
    else  
    {  

     $msg = "Wrong email or Password. Please retry   :: " . $numrows;
        header("location:Login.php?msg=$msg");
    }  



mysql_close()
?>
