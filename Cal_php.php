<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cal_php</title>
</head>
<body>
    <?php
    
     $x = 6;
     $y = 3;
     function __construct( $x, $y ) {
    $this-> x = $x;
    $this->y = $y;
    }
     function add($x, $y) {
    return ($x + $y);
    }
     function subtract($x, $y) {
    return ($x - $y);
    }
     function multiply($x, $y) {
    return ($x * $y);
    }
     function divide($x, $y) {
    return  ($x / $y);
    }

    
    echo "the result of adding is: " . add($x, $y) . "<br>"; 
    echo "the result of subtracting is: " . subtract($x, $y) . "<br>";
    echo "the result of multiplication is: " . multiply($x, $y) . "<br>"; 
    echo "the result of dividing is: " . divide($x, $y) . "<br>"; 
    ?>
</body>
</html>