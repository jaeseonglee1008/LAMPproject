
<?php 

	include_once'includes/dbh.inc.php';


	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Dani','Nee','dan@gmail.com','Admin','test123123')";
	mysqli_query($conn,$sql);

	header("Location: ../index.php?signup=success");


