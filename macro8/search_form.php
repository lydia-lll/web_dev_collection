<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
        #wrap{
            padding: 10px;
        }
        #form{
            margin: 15px;
            margin-left: 0px;
            padding-top: 5px;
        }
	</style>
</head>
<body>
	<div id="wrap">
		<h1>My Movie Database: View</h1>

	    <?php
	        include('header.php');
	    ?>

	    <div id="form">
	    	<form method="POST" action="search_process.php">
		        Title: <input type="text" name="title"><br>
		        Year: <input type="text" name="year"><br>
		        <input style="margin: 15px;" type="submit" value="Search Movie">
		    </form>
	    </div>
	</div> 
</body>
</html>