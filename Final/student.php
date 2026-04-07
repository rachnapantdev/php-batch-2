<?php
class Student
{
    // data members 
    private $sname;
    private $h;
    private $e;
    private $m;
// Constructor
    public function __construct($name, $hindi, $eng, $math)
    {
        $this->sname = $name;
        $this->h = $hindi;
        $this->e = $eng;
        $this->m = $math;
    }
    public function getDetails()
    {
        echo $this->sname."<br>";
        echo $this->h."<br>";
        echo $this->e."<br>";
        echo $this->m."<br>";
        $total = $this->h + $this->e + $this->m;
        echo $total;
    }
}

// Create object of Student Class
    $std = new Student("Abhishek",77,88,99);
    $std->getDetails();
?>