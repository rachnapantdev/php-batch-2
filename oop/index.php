<?php

class Student
{
    // declare varibales or properties
    public $studentName;
    public $studentClass;
    public $studentCity;
    public function __construct()
    {
        echo "<h1>Welcome </h1> ";
    }
    // defining methods
    public function getDetails()
    {
        echo "This is a basic Method of a class";
    }
}
// Create Object of a class
$std = new Student();
// new : It is a keyword which is used to allocate memory to the Object
// Student() :  It is a constructor 
$std->studentName = "Aman";
$std->studentClass = "BCA";
$std->studentCity = "Delhi";

echo $std->studentName."<br>";
echo $std->studentClass."<br>";
echo $std->studentCity."<br>";

echo $std->getDetails();
?>

<a href="./car.php"> Private Modifier Example </a>