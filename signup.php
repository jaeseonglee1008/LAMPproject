
<?php 
include_once 'header.php';
?>
<section class="main-container">
	<div class="main-wrapper">

		<div class="container">
			<div class="col-xs-10">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
				<hr>
				<form action="includes/signup.inc.php" method="POST">

					<div class="row">

						<div class="col-xs-6">
							<label for="first"><b>First name</b></label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-italic"></i></span>
								<?php 
								if (isset($_GET['first'])) {
									$first = $_GET['first'];
									echo '<input type="text" class="form-control" name="first" placeholder="Enter First Name" value="'.$first.'">';
								}else{
									echo '<input type="text" class="form-control" name="first" placeholder="Enter First Name">';
								}
								?>
							</div>

						</div>
						<div class="col-xs-6">
							<label for="last"><b>Last name</b></label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-italic"></i></span>
								<?php
								if (isset($_GET['last'])) {
									$last = $_GET['last'];
									echo '<input type="text" class="form-control" name="last" placeholder="Enter Last Name" value="'.$last.'">';
								}else{
									echo '<input type="text" class="form-control" name="last" placeholder="Enter Last Name">';
								}
								?>
							</div>
						</div>
					</div>

					<br>

					<label for="email"><b>Email</b></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input type="text" class="form-control" name="email" placeholder="Enter Email">
					</div>
					<br>
					<label for="uid"><b>Username</b></label>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

						<?php 
						if (isset($_GET['uid'])) {
							$last = $_GET['uid'];
							echo '<input type="text" class="form-control" name="uid" placeholder="Enter Username" value="'.$uid.'">';
						}else{
							echo '<input type="text" class="form-control" name="uid" placeholder="Enter Username">';
						}

						?>
					</div>
					<br>
					<label for="pwd"><b>Password</b></label>

					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="Password" class="form-control" name="pwd" placeholder="Enter Password">
					</div>
					<br>
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

				<?php 
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
					}else{
						echo "<p class='error'>Unknown Error occured!<p>";
						exit();
					}
				}
				?>

			</div>
		</div>





	</div>
</section>


<?php 
include_once 'footer.php';
?>
