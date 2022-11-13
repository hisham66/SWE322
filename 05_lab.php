<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_05</title>

        <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
</head>
<body>
    
    <?php
        class Courses {
            private $courseCode;
            private $courseName;
            private $courseDescription;
            private $grade;

            public function setCourseCode($courseCode) {
                $this->courseCode = $courseCode;
            }

            public function getCourseCode() {
                return $this->courseCode;
            }

            public function setCourseName($courseName) {
                $this->courseName = $courseName;
            }

            public function getCourseName() {
                return $this->courseName;
            }

            public function setCourseDescription($courseDescription) {
                $this->courseDescription = $courseDescription;
            }

            public function getCourseDescription() {
                return $this->courseDescription;
            }

            public function setGrade($grade) {
                $this->grade = $grade;
            }

            public function getGrade() {
                return $this->grade;
            }

            public function gradeA() {
                if($this->grade == "A+") {
                    return true;
                } else {
                    return false;
                }
            }

            public function getCourseDetails() {
                return "Course Code: " . $this->courseCode . "<br>Course Name: " . $this->courseName . "<br>Course Description: " . $this->courseDescription . "<br>Grade: " . $this->grade;
            }
        }

        $course1 = new Courses();
        $course1->setCourseCode("CIS 381");
        $course1->setCourseName("Computer Ethics");
        $course1->setCourseDescription("This course is intended to give students a chance to reflect on the humanitarian, social, and professional impact of computer technology by focusing on ethical issues faced by and brought about by computing professionals, including those related to networking and the internet, intellectual property, privacy, security, reliability, and liability.");
        $course1->setGrade("B+");

        $course2 = new Courses();
        $course2->setCourseCode("MTH 302");
        $course2->setCourseName("Differential Equations");
        $course2->setCourseDescription("Differential Equations are the language in which the laws of nature are expressed. Understanding properties of solutions of differential equations is fundamental to much of contemporary science and engineering.");
        $course2->setGrade("A+");

        $course3 = new Courses();
        $course3->setCourseCode("SWE 321");
        $course3->setCourseName("Advanced User Interface Design");
        $course3->setCourseDescription("In this course, you will gain an understanding of the critical importance of user interface design. You will also learn industry-standard methods for how to approach the design of a user interface and key theories and frameworks that underlie the design of most interfaces you use today.");
        $course3->setGrade("A");

        $courses = array($course1, $course2, $course3);

        echo "<table>";
        echo "<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th></tr>";
        foreach($courses as $course) {
            if($course->gradeA()) {
                echo "<tr style='background-color: yellow'>";
            } else {
                echo "<tr>";
            }
            echo "<td>" . $course->getCourseCode() . "</td><td>" . $course->getCourseName() . "</td><td>" . $course->getCourseDescription() . "</td><td>" . $course->getGrade() . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>