<!doctype html>
<html>
    <head>
        <title>Movie Database</title>
        <style type="text/css">
            #error{
                background-color: #fa897b;
                /*height: 10vh;*/
                padding: 5px;
                width: 30vw;
                margin: 25px;
                margin-left: 15px;
            }
            #success{
                background-color: #86e37e;
                /*height: 10vh;*/
                padding: 5px;
                width: 30vw;
                margin: 25px;
                margin-left: 15px;
            }
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
            <h1>My Movie Database: Add</h1>
            <?php
                include('header.php');
                if($_GET['error']=='blank'){
                    print "<div id='error'><h5>Fill Out All the Form!</h5></div>";
                }
                else{
                    if($_GET['add']=='success'){
                        print "<div id='success'><h5>Movie Added!</h5></div>";
                    }
                }
            ?>
            <div id="form">
                <form method="POST" action="add_save.php">
                    Title: <input type="text" name="title"><br>
                    Year: <input type="text" name="year"><br>
                    <input style="margin: 15px;" type="submit" value="Add Movie">
                </form> 
            </div>
        </div>


    </body>

</html>