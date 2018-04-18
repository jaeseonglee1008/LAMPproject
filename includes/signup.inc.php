
<?php 


	if(!isset($_POST['submit'])){
		header("Location: ../index.php?signup=error");
		//in case the user access this page without filling out the form
	}else{
		include_once'dbh.inc.php';

		$first = mysqli_real_escape_string($conn,strtolower($_POST['first']));
		$last = mysqli_real_escape_string($conn,strtolower($_POST['last']));
		$email = mysqli_real_escape_string($conn,strtolower($_POST['email']));
		$uid = mysqli_real_escape_string($conn,strtolower($_POST['uid']));
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

		$uppercase = preg_match('@[A-Z]@', $pwd);
		$lowercase = preg_match('@[a-z]@', $pwd);
		$number    = preg_match('@[0-9]@', $pwd);
			

		if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
		header("Location: ../index.php?signup=incompletedform");
		exit();
		}elseif(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
		header("Location: ../index.php?signup=char");
		exit();	
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location: ../index.php?signup=invalidemail");
		exit();
		}elseif(!$uppercase || !$lowercase || !$number || strlen($pwd) < 8){
		header("Location: ../index.php?signup=password");
		exit();	
		}else{
			$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){

				echo "SQL failed";
			}else{
				mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
				mysqli_stmt_execute($stmt);
			}
			mysqli_query($conn,$sql);
			header("Location: ../index.php?signup=success");
			exit();
		}

	}


//prepared statement