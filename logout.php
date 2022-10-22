<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        <link rel='stylesheet' href='Main.css' />
    </head>
    <body>
         <?php
    session_start();
    unset($_SESSION['session_username']);
    session_destroy();
    header("location:index.php");

        ?>
        
   
    </body>
</html>