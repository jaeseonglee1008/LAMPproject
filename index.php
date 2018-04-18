
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is a title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-sm-4">
			<h1>Sign Up</h1>
			<p>Please fill in this form to create an account.</p>
			<hr>
			<form action="includes/signup.inc.php" method="POST">
				<label for="first"><b>First name</b></label>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>

					<?php 
					if (isset($_GET['first'])) {
						$first = $_GET['first'];
						echo '<input type="text" class="form-control" name="first" placeholder="Enter First Name" value="'.$first.'">';
					}else{
						echo '<input type="text" class="form-control" name="first" placeholder="Enter First Name">';
					}
					?>

				</div>


				<label for="last"><b>Last name</b></label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-menu-right"></i></span>
					<?php
					if (isset($_GET['last'])) {
						$last = $_GET['last'];
						echo '<input type="text" class="form-control" name="last" placeholder="Enter Last Name" value="'.$last.'">';
					}else{
						echo '<input type="text" class="form-control" name="last" placeholder="Enter Last Name">';
					}
					?>
				</div>



				<label for="email"><b>Email</b></label>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="text" class="form-control" name="email" placeholder="Enter Email">
				</div>

				<label for="uid"><b>Username</b></label>

				<div class="input-group">
					<span class="input-group-addon"><b>@</b></span>


					<?php 
					if (isset($_GET['uid'])) {
						$last = $_GET['uid'];
						echo '<input type="text" class="form-control" name="uid" placeholder="Enter Username" value="'.$uid.'">';
					}else{
						echo '<input type="text" class="form-control" name="uid" placeholder="Enter Username">';
					}

					?>
				</div>

				<label for="pwd"><b>Password</b></label>

				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="Password" class="form-control" name="pwd" placeholder="Enter Password">
				</div>

				<br>
				<div class="btn-group btn-group-justified">
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-danger">Cancel</button>
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-success" name="submit">Sign up</button>
					</div>
				</div>
				<br>



			</form>
		</div>
	</div>
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