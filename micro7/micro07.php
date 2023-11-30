<!DOCTYPE html>
<html>
<head>
	<title>Micro 07</title>
	<style type="text/css">
		.hidden{
			display: none;
		}
	</style>
</head>
<body>
	<?php

		// if($_GET['user']){
		// 	print "<strong>Hello, " . $_GET['user'] . "! Logging you in...";
		// }
		if($_COOKIE['loggedin']=='yes'){?>
				<div id="secret">
					You're logged in
				</div>
		<?php
		}
		else{?>
			<form action="micro07_process.php" method="POST">
				User Name:
				<input type="text" id="username" name="username">
				<br>

				Password:
				<input type="password" id="password" name="password">

				<input type="submit">
			</form>
		<?php	
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
	
</body>
</html>