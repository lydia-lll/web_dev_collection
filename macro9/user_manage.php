<?php 

	include('config.php');

    // get command
    $action = $_GET['action'];


    // command: save
    // inputs:  a nickname and a message
    // outputs: a copy of the message, or 'error'
    if ($action == 'login') {

        $username = $_POST['username'];
        $password  = $_POST['password'];

        // basic validation
        if ($username && $password) {
            // save this message into our database
            $db = new SQLite3(  $pathUsr  );
            $sql = "SELECT * FROM items WHERE username = :name AND password = :pass";
            $statement = $db->prepare($sql);
            $statement->bindValue(':name', $username);
            $statement->bindValue(':pass', $password);
            $result = $statement->execute();
            $array = $result->fetchArray();
            // print $array;
            if($array){
                print "success";
            }else{
                print "not found";
            }
        }else {
            print "MISSINGDATA";
        }

        $db->close();
        unset($db);

    }


    if ($action == 'signup') {

        $username = $_POST['username'];
        $password  = $_POST['password'];

        // basic validation
        if ($username && $password) {
            $db = new SQLite3(  $pathUsr  );
            $sql = "SELECT * FROM items WHERE username = :name";
            $statement = $db->prepare($sql);
            $statement->bindValue(':name', $username);
            $result = $statement->execute();
            $array = $result->fetchArray();
            // print $array;
            if($array){
                print "user exist";
            }else{
                // save this message into our database
                $sql2 = "INSERT INTO items (username,password) VALUES (:user,:pass)";
                $statement2 = $db->prepare($sql2);
                $statement2->bindValue(':user', $username);
                $statement2->bindValue(':pass', $password);
                $statement2->execute();
                $rows_affected = $db->changes();
                print "signedUp";
            }
            
        }else {
            print "MISSINGDATA";
        }

        $db->close();
        unset($db);


    }

 ?>