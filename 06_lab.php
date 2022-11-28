<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 06</title>
</head>
<body>
<?php
       
       $connection = mysqli_connect('127.0.0.1:3307', 'hisham', 'hisham', "lab_db"); 

        if(!$connection){
            echo "Error Number ".mysqli_connect_errno();
            echo "<br>";
            echo "Error ".mysqli_connect_error();
            exit;
        }
            

        $query = "INSERT INTO `06_lab`( `F_name`, `L_name`, `S_id`, `Major`) VALUES ('hisham','sherif','201911187', 'software engineering')";

        if(mysqli_query($connection, $query)){
            echo "New student Has been added";
        } else {
           echo (mysqli_error($connection));
        }


    ?>
</body>
</html>