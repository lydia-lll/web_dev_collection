<?php 

	//grab the incoming data
	$color = $_POST['color'];
	$animal = $_POST['animal'];
	$quality = $_POST['quality'];
	$ghost = $_POST['ghost'];
	$retake = $_GET['retake'];
	$retaking = false;

	$grf = 0;
	$slt = 0;
	$hfp = 0;
	$lvc = 0;

	if($retake){
		//send them back to the form and ask them to fill
		header("Location: retake.php");
		$retaking = true;
		exit();
	}

	//validate the data
	else if(!$color || !$animal || !$quality || !$ghost){
		if(retaking){
			//send them back to the form and ask them to fill
			header("Location: retake.php?error=forgot");
			exit();

		}else{
			//send them back to the form and ask them to fill
			header("Location: index.php?error=forgot");
			exit();
		}
	}

	else{
			//diagnose which character the user is
		if($color == 'sg'){
			$grf += 1;
		}
		else if($color == 'yb'){
			$hfp += 1;
		}
		else if($color == 'bb'){
			$lvc += 1;
		}
		else if($color == 'gs'){
			$slt += 1;
		}

		if($animal == 'l'){
			$grf += 1;
		}
		else if($animal == 'b'){
			$hfp += 1;
		}
		else if($animal == 'e'){
			$lvc += 1;
		}
		else if($animal == 's'){
			$slt += 1;
		}

		if($quality == 'd'){
			$grf += 1;
		}
		else if($quality == 'l'){
			$hfp += 1;
		}
		else if($quality == 'c'){
			$lvc += 1;
		}
		else if($quality == 'a'){
			$slt += 1;
		}

		if($ghost == 'nn'){
			$grf += 1;
		}
		else if($ghost == 'ff'){
			$hfp += 1;
		}
		else if($ghost == 'gl'){
			$lvc += 1;
		}
		else if($ghost == 'bb'){
			$slt += 1;
		}

		$results = array($grf, $hfp, $lvc, $slt);
		$maxResult = max($results);
		if($maxResult==$grf){
			$result = "Gryffindor";
		}else if($maxResult==$hfp){
			$result = "Hufflepuff";
		}else if($maxResult==$lvc){
			$result = "Ravenclaw";
		}else if($maxResult==$slt){
			$result = "Slytherin";
		}

		//save the data to a file on the server
		$filename = getcwd() . '/data/result.txt';
		file_put_contents($filename, $result . "\n", FILE_APPEND);

		//set cookie
		setcookie('result',$result);

		//reset the values
		// $color = "";
		// $animal = "";
		// $quality = "";
		// $ghost = "";
		// $retake = "";

		// $grf = 0;
		// $slt = 0;
		// $hfp = 0;
		// $lvc = 0;

		//send them back so they can see their result
		header("Location: index.php?result=".$result);
		exit();
	}

 ?>