<?php 
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	// print $username;
	// print $password;
	if($username && $password){
		if ($username == "pikachu" && $password == "pokemon") {
			# code...
			header("Location: micro06.php?user=" . $username);
			exit();
		}
		else{
			header("Location: micro06.php?error=incorrect");
			exit();
		}
	}
	else if(!$username){
		// print "no user";
		header("Location: micro06.php?error=missingUser");
		exit();
	}
	else if(!$password){
		// print "no user";
		header("Location: micro06.php?error=missingPw");
		exit();
	}
	else{
		header("Location: micro06.php?error=error");
		exit();
	}


 ?>