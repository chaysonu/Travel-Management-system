<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>TRAVEL MANAGEMENT SYSTEM</title>
<link rel="stylesheet" href="style.css" />
</head>
<style>
	body
			{ 
				background-image:url(http://www.robertsoncollege.com/site/assets/files/11355/travel-counsellor-program.jpg);
			}
			#form
			{ 
				text-align:center;
				border: 2px dark gray;
				}
			#mar
			{ 
				color:red;
			}
			#sub
			{
			text-align:center;
			}
			</style>
<body>
<?php
require('db1.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: header.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>           TRAVEL MANAGEMENT SYSTEM</h1>
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br>
<input type="password" name="password" placeholder="Password" required /><br>
<input name="submit" type="submit" value="Login"  /><br>
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>

