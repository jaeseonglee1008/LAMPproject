
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>This is a title</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="includes/signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="First name">
	<br>
	<input type="text" name="last" placeholder="Last name">
	<br>
	<input type="text" name="email" placeholder="E-mail">
	<br>
	<input type="text" name="uid" placeholder="Username">
	<br>
	<input type="Password" name="pwd" placeholder="Password">
	<br>
	<button type="submit" name="submit">Sign up</button>
</form>
<?php 
	/*$fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($fullUrl, "signup=empty") == true) {
		echo "<p class='error'>You did not fill in all fields!<p>";
		exit();
	}elseif (strpos($fullUrl, "signup=incompletedform") == true) {
		echo "<p class='error'>You did not fill in all fields!<p>";
		exit();
	}elseif (strpos($fullUrl, "signup=char") == true) {
		echo "<p class='error'>Invalid name!<p>";
		exit();
	}elseif (strpos($fullUrl, "signup=invalidemail") == true) {
		echo "<p class='error'>Invalid email address!<p>";
		exit();
	}elseif (strpos($fullUrl, "signup=password") == true) {
		echo "<p class='error'>Password should be consist of at least one lowercase, one uppercase and number with greater 8 characters.<p>";
		exit();
	}elseif (strpos($fullUrl, "signup=success") == true) {
		echo "<p class='success'>You have been signed up!<p>";
		exit();
	}*/

	if(!isset($_GET['signup'])){
		exit();
	}else{
		$signupCheck = $_GET['signup'];
		if($signupCheck == "empty"){
			echo "<p class='error'>You did not fill in all fields!<p>";
			exit();
		}elseif($signupCheck == "incompletedform"){
			echo "<p class='error'>You did not fill in all fields!<p>";
			exit();
		}elseif($signupCheck == "char"){
			echo "<p class='error'>Invalid name!<p>";
			exit();
		}elseif($signupCheck == "invalidemail"){
			echo "<p class='error'>Invalid email address!<p>";
			exit();
		}elseif($signupCheck == "password"){
			echo "<p class='error'>Password should be consist of at least one lowercase, one uppercase and number with greater 8 characters.<p>";
			exit();
		}elseif($signupCheck == "success"){
			echo "<p class='error'>You have been signed up!<p>";
			exit();
		}
	}

 ?>



</body>
</html>