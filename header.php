
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>This is a title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<header>
		<nav>
			<div class="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<a href="index.php"><button type="submit" class="btn btn-primary" name="submit">Home</button></a>
						</div>
						<div class="col-xs-10">
							<div class="nav-login">
								<div class="row">
									<?php 
									if(isset($_SESSION['u_id'])){
										echo '
										<div class="col-xs-8">
										</div>
										<div class="col-xs-4">
										<form action="includes/logout.inc.php" method="POST">
										<button type="submit" class="btn btn-danger" name="submit">Logout</button>
										</form>
										</div>
										';
									}else{
										echo'
										<div class="col-xs-8">
										<form action="includes/login.inc.php" method="POST">
										<div class="row">
										<div class="col-xs-5">
										<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" class="form-control" name="uid" placeholder="Username/Email">
										</div>
										</div>
										<div class="col-xs-5">
										<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" class="form-control" name="pwd" placeholder="Password">
										</div>
										</div>
										<div class="col-xs-2">
										<button type="submit" class="btn btn-success" name="submit">Login</button>
										</div>
										</div>
										</form>
										</div>
										<div class="col-xs-2">
										<a href="signup.php"><button type="submit" class="btn btn-info" name="submit">Signup</button></a>
										</div>
										';
									}
									?>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>


