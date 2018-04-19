
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is a title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="customizedstyle.css">
	<!-- Latest compiled and minified Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<header >
		<nav>

			<div class="main-wrapper">
		<div class="container">
			<div class="col-xs-10">
				<ul>
					<li><a href="index.php">Home</a></li>
				</ul>
				<div class="nav-login">
					<?php 
					if(isset($_SESSION['u_id'])){
						echo '<form action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button></form>';
					}else{
						echo'<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/Email">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						</form><a href="signup.php">Signup</a>';
					}
					?>
				</div>
	</div>
	</div>


			</div>


		</nav>

	</header>
	<br>	<br>	<br>	<br>	<br>	