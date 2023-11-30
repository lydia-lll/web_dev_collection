<!doctype html>
<html>
    <head>
        <title>Movie Database</title>
        <style type="text/css">
            #error{
                background-color: blue;
            }
            #success{
                background-color: red;
            }
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
                if($_GET['error']=='blank'){
                    print "<div id='error'><h5>Fill Out All the Form!</h5></div>";
                    include('header.php');
                }
                else{
                    if($_GET['add']=='success'){
                        print "<div id='success'><h5>Movie Added!</h5></div>";
                    }
                    include('header.php');

            // <!-- grab all movies from the database and display to the user -->
                // connect to database
                    include('config.php');
                    // $dbpath = getcwd() . '/database/movies.db';
                    // $db = new SQLite3($dbpath);


                    // set up a SQL query to get all movies from the table
                    $sql = "SELECT id, title, year FROM movies";
                    $statement = $db->prepare($sql);
                    $result = $statement->execute();
            ?>
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Year</th>
                            <th>Options</th>
                        </tr>
            <?php
                

                    // iterate over those movies and generate output
                    while ($array = $result->fetchArray()) {

                        // print $array['id'] . ' - ' . $array['title'] . ' - ' . $array['year'] . "<a href='delete.php?id=".$array['id']."'>Delete</a>" . '<br>';
                        print "<tr><th>".$array['title']."</th><th>". $array['year'] ."</th><th><a href='delete.php?id=".$array['id']."'>Delete</a></th></tr>";

                    }

                    $db->close();
                    unset($db);
                }

            ?>
                    </table>
        </div>



    </body>

</html>