<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Title
	</title>
</head>
<body>
	<?php 
	$data = "Admin";
	//Created a template
	$sql = "SELECT * FROM users WHERE user_uid=?;";
	//Created a prepared statement
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo 'SQL statement failed!';
	}else{
		//Bind the parameters to the placeholder	
		mysqli_stmt_bind_param($stmt, "s", $data);
	}

	 ?>
</body>
</html>