<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>

    <style>
			body {background-color: Lightgray;} 
	</style>
</head>
<body>

    <?php

        /* Part 1, Indexed Array*/

        $classmates = array("Ali", "Mojab", "Alaa", "Ward", "Fatima", "Rahaf"); 

        /* Part 2, Associative Array, the courses that i finished in the last year: */

        $course = array("ISL 301"=>"Work Ethics in Islam", "CIS 202"=>"Data Structures", "CIS 222"=>"Interactive Media", "SWE 301"=>"Software Requirements Engineering", "STT 103"=>"Probability and Statistics", "MTH 301"=>"Linear Algebra",
        "ENG 101"=>"English Essay Writing", "SWE 302"=>"Software Architecture & Design", "CIS 381"=>"Computer Ethics", "MTH 302"=>"Differential Equations", "SWE 300"=>"Software Process and Modeling", "SWE 321"=>"Advanced User Interface Design");

        /* Part 3, Multidimensional Array */

        $device = array (
        array("Laptop","Asus","MSI"),
        array("CPU","AMD","Intel"),
        array("GPU","AMD","Nvidia")
        );

    ?>
        <!-- Part 1, Indexed Array -->
        <div>
            <h1> ClassMates Names </h1><br>
            <?php    

                $length = count($classmates);

                /* Using the for loop to print the names of classmates  */
                for($i = 0; $i < $length; $i++) 
                {
                echo $classmates[$i];
                echo "<br>";
                }

            ?>
        </div>
        <hr>

    <!-- Part 2, Associative Array, the courses that i finished in the last year:   -->
        <div>
            <h1> Course code and Course Names of the courses I have finished in the last year: </h1><br>
            <?php    

                /* Using the for each loop to print the course code and course name   */
                foreach($course as $i => $i_value) {
                    echo "Course Code (key) : " . $i . ", Course Name (value) : " . $i_value;
                    echo "<br>";
                }
                
            ?>
        </div>
        <hr>

    <!-- Part 3, Multidimensional Array  -->
        <div>
            <h1> Printing values for the Multidimensional Array </h1><br>
            <?php    

                echo '"I am looking for for '.$device[0][1].' '.$device[0][0].' with '.$device[1][1].' '.$device[1][0].' and '.$device[2][2].' '.$device[2][0].'".';
                
            ?>
        </div>
        <hr>

</body>
</html>