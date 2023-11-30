<!DOCTYPE html>
<html>
<head>
	<title>Micro 06</title>
</head>
<body>
	<?php

		if($_GET['user']){
			print "<strong>Hello, " . $_GET['user'] . "! Logging you in...";
		}
		if($_GET['error']=="incorrect"){
			print "<strong>Username and Password don't match</strong>";
		}
		if($_GET['error']=="missingUser"){
			print "<strong>Please fill in your username!</strong>";
		}
		if($_GET['error']=="missingPw"){
			print "<strong>Please fill in your password!</strong>";
		}
		if($_GET['error']=="error"){
			print "<strong>Something went wrong...</strong>";
		}

	?>
	<form action="micro06_process.php" method="POST">
		User Name:
		<input type="text" id="username" name="username">
		<br>

		Password:
		<input type="password" id="password" name="password">

		<input type="submit">
	</form>
</body>
</html>