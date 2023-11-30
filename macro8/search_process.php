<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <style type="text/css">
        table, th, td {
          border: 1px solid;
        }
        table {
            margin: 20px;
            width: 92%;
        }
        #wrap{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div id="wrap">
        <h1>My Movie Database: View</h1>

        <?php
            include('header.php');
        ?>

        <?php 

        // grab data from the user
        $title = $_POST['title'];
        $year = $_POST['year'];


        // $dbpath = getcwd() . '/database/movies.db';
        // $db = new SQLite3($dbpath);
        include('config.php');

        if($title && !$year){
            // $sql = "SELECT * FROM movies WHERE title=".$title;
            $sql = "SELECT * FROM movies WHERE title= :title;";
            $statement = $db->prepare($sql);
            $statement->bindValue(':title', $title);
        }
        else if($year && !$title){
            // $sql = "SELECT * FROM movies WHERE year=".$year;
            $sql = "SELECT * FROM movies WHERE year= :year;";
            $statement = $db->prepare($sql);
            $statement->bindValue(':year', $year);
        }
        else if($title && $year){
            // $sql = "SELECT * FROM movies WHERE year=".$year "AND title=".$title;
            $sql = "SELECT * FROM movies WHERE title= :title; AND year= :year;";
            $statement = $db->prepare($sql);
            $statement->bindValue(':title', $title);
            $statement->bindValue(':year', $year);
        }
        else{
            print "Form not completed; try again.";
        }
        // $sql = "SELECT * FROM movies WHERE id=".$id;
        $result = $statement->execute();

        // $rows_affected = $db->changes();
        ?>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Year</th>
                        <!-- <th>Options</th> -->
                    </tr>
        <?php

        while ($array = $result->fetchArray()) {

            // print $array['id'] . ' - ' . $array['title'] . ' - ' . $array['year'] . "<a href='index.php'>Back</a>" . '<br>';
            print "<tr><th>".$array['title']."</th><th>". $array['year'] ."</th></tr>";

        }

        $db->close();
        unset($db);

        ?>
                </table>
    </div>
</body>
</html>
