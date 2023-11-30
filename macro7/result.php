<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		body{
			background-color: black;
		}
		#wrap{
			margin: 20px;
		}
		h1, h3, a{
			/*color: white;*/
			color: #ffcdb2;
		}
		h4{
			/*margin: auto;*/
			margin: 5px;
			position: relative;
			top: 6vh;
			/*color: #ffcdb2;*/
			color: white;
		}
		#link{
			display: flex;
			padding: 10px;
			justify-content: center;
		}
		#link2{
			width: 10vw;
		}
		<?php 

			$filename = getcwd() . '/data/result.txt';

			$data = file_get_contents($filename);
			//print $data;
			$wordCount = str_word_count($data);
			$gfCount = substr_count($data, "Gryffindor");
			$hpCount = substr_count($data, "Hufflepuff");
			$lvCount = substr_count($data, "Ravenclaw");
			$slCount = substr_count($data, "Slytherin");
			$gfLength = round($gfCount/$wordCount*100);
			$hpLength = round($hpCount/$wordCount*100);
			$slLength = round($slCount/$wordCount*100);
			$lvLength = round($lvCount/$wordCount*100);


		 ?>
		<?php 

			print "#gf{margin-bottom:10px; background-color: #740001; height:15vh; width: ".$gfLength. "vw;}";
			print "#hp{margin-bottom:10px; background-color: #ecb939; height:15vh; width: ".$hpLength. "vw;}";
			print "#sl{margin-bottom:10px; background-color: #1a472a; height:15vh; width: ".$slLength. "vw;}";
			print "#lv{margin-bottom:10px; background-color: #0e1a40; height:15vh; width: ".$lvLength. "vw;}";

		 ?>
	</style>
</head>
<body>
	<div id="wrap">
		<h1>Hogwarts Quiz Result!</h1>
		
		<?php 

			print "<h3>In total there have been " .$wordCount. " submissions</h3>";
			print "<div id='gf'><h4>Gryffindor  ".$gfLength."%</h4></div>";
			print "<div id='hp'><h4>Hufflepuff  ".$hpLength."%</h4></div>";
			print "<div id='lv'><h4>Ravenclaw  ".$lvLength."%</h4></div>";
			print "<div id='sl'><h4>Slytherin  ".$slLength."%</h4></div>";

		 ?>
		<div id="link"><div id="link2"><a href="index.php">Back To Quiz</a></div></div>
	</div>
</body>
</html>