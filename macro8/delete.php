<?php 

	$id = $_GET['id'];

	// $dbpath = getcwd() . '/database/movies.db';
 //    $db = new SQLite3($dbpath);
    include('config.php');

    $sql = "DELETE FROM movies WHERE id=".$id;
    $statement = $db->prepare($sql);
    $statement->execute();

    $rows_affected = $db->changes();

    $db->close();
    unset($db);


    // redirect them back so they can add more movies to the database
    header("Location: index.php");
    exit();

 ?>