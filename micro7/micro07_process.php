<?php 
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$path = getcwd() . '/data';
	// print $username;
	// print $password;
	if($username && $password){
		if ($username == "pikachu" && $password == "pokemon") {
			# code...
			file_put_contents($path.'/loginStatus.txt', "successful\n", FILE_APPEND);
			setcookie('loggedin','yes');
			header("Location: micro07.php");
			exit();
		}
		else{
			file_put_contents($path.'/loginStatus.txt', "unsuccessful\n", FILE_APPEND);
			header("Location: micro07.php?error=incorrect");
			exit();
		}
	}
	else if(!$username){
		// print "no user";
		file_put_contents($path.'/loginStatus.txt', "missing\n", FILE_APPEND);
		header("Location: micro07.php?error=missingUser");
		exit();
	}
	else if(!$password){
		// print "no user";
		file_put_contents($path.'/loginStatus.txt', "missing\n", FILE_APPEND);
		header("Location: micro07.php?error=missingPw");
		exit();
	}
	else{
		header("Location: micro07.php?error=error");
		exit();
	}


 ?>