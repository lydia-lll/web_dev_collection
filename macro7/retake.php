<!DOCTYPE html>
<html>
<head>
	<title>Hogwarts Quiz</title>
	<style type="text/css">
		body{
			background-color: #6D6875;
		}
		#error{
			background-color: red;
			color: white;
			padding: 10px;
			font-size: 200%;
		}
		#form{
			padding: 20px;
			width: 60vw;
			margin-left: auto;
			margin-right: auto;
			/*background-color: pink;*/
			background-color: #E5989B;
		}
		#title{
			padding: 20px;
			width: 60vw;
			margin-left: auto;
			margin-right: auto;
			color: #FFB4A2;
		}
		#questions{
			/*background-color: #FFB4A2; */
			background-color: #FFCDB2; 
			width: 40vw;
			height: 6vh;
			margin-left: auto;
			margin-right: auto;
		}
		#select{ 
			width: 40vw;
			margin-left: auto;
			margin-right: auto;
		}
		#selectBox{
			width: 20vw;
		}
		#submit{
			width: 15vw;
			margin-left: auto;
			margin-right: auto;
		}
		#resultTitle{
			margin-left: 100px;
		}
		#image{
			height: 70vh;
			width: auto;
			margin-left: auto;
			margin-right: auto;
		}
		#resultBox{
			padding: 20px;
			width: 40vw;
			margin-left: auto;
			margin-right: auto;
			background-color: #B5838D;
			display: flex;
			justify-content: center;
		}
		#resultBox2{
			padding: 20px;
			padding-top: 0px;
			width: 40vw;
			margin-left: auto;
			margin-right: auto;
			background-color: #B5838D;
			display: flex;
			justify-content: center;
		}
		#btn{
			background-color: #FFCDB2;
			padding: 10px;
			padding-top: 0px;
			padding-bottom: 0px;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<?php
		if ($_GET['result']){
			// print "<div>You are a ".$_GET['result']. "</div>";
			print "<h1 id='resultTitle'>The Sorting Hat Assigned You To...</h1>";
			print "<div id='resultBox'><img id='image' src='assignment07_images/".$_GET['result'].".jpeg'></div>";
			print "<div id='resultBox2'><h3>".$_GET['result']. "!</h3></div>";
	?>
			<div id='resultBox2'>
				<a href="processresults.php?retake=true">
					<button id="btn">Take Again?</button>
				</a>
				<a href="result.php">
					<button id="btn">See Result</button>
				</a>
			</div>
	<?php
		}else{
	?>

	<h1 id="title">Hogwarts Quiz!</h1>
	<?php
		if($_GET['error'] == 'forgot'){
	?>
			<div id="error">You forgot a value!</div>
	<?php
		}
	?>
	<form action="processresults.php" method="POST" id="form">
		<h3 id="questions">What's your favorite color:</h3>
		<div id="select">
			<select id="selectBox" name="color" id="color">
				<option value="">Select a color</option>
				<option value="sg">Scarlet and Gold</option>
				<option value="yb">Yellow and Black</option>
				<option value="bb">Blue and Bronze</option>
				<option value="gs">Green and Silver</option>
			</select>
		</div>
		<br>
		<h3 id="questions">Choose an animal you like the most:</h3>
		<div id="select">
			<select id="selectBox" name="animal" id="animal">
				<option value="">Select an animal</option>
				<option value="l">Lion</option>
				<option value="b">Badger</option>
				<option value="e">Eagle</option>
				<option value="s">Snake</option>
			</select>
		</div>
		<br>
		<h3 id="questions">What is the quality you are most proud of:</h3>
		<div id="select">
			<select id="selectBox" name="quality" id="quality">
				<option value="">Select a quality</option>
				<option value="d">Daring</option>
				<option value="l">Loyalty</option>
				<option value="c">Curiosity</option>
				<option value="a">Ambition</option>
			</select>
		</div>
		<br>
		<h3 id="questions">Who is your favorite ghost:</h3>
		<div id="select">
			<select id="selectBox" name="ghost" id="ghost">
				<option value="">Select a ghost</option>
				<option value="nn">Nearly-Headless Nick</option>
				<option value="ff">The Fat Friar</option>
				<option value="gl">The Grey Lady</option>
				<option value="bb">The Bloody Baron</option>
			</select>
		</div>
		<br>
		<div id="submit">
			<input type="submit">
		</div>
	</form>

	<?php
	  }
	?>
</body>
</html>