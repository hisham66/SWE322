<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
</head>
<body>
    <?php
    //befor i edited it

    // $n = 1;
    // $s = “1”;
    // $n1 = $n + $s;
    // $n2 = $n1 + “10 little penguins”
    // $n3 = “hello”;
    // $n4 = “ world”;
    // $n5 = $n3+$n4;
    // $n6 = $n3.$n4;
    
     //after

    $n = 1;
    $s = "1";
    $n1 = $n + $s;
    $n2 = $n1 . "10 little penguins";
    $n3 = "hello";
    $n4 = "world";
    $n5 = $n3 . $n4;
    $n6 = $n3.$n4;
   
    echo "$n";
    echo "<br>";
    echo $s;
    echo "<br>";
    echo $n1;
    echo "<br>";
    echo $n2;
    echo "<br>";
    echo $n3;
    echo "<br>";
    echo $n4;
    echo "<br>";
    echo $n5;
    echo "<br>";
    echo $n6;
    ?>
</body>
</html>