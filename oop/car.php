<?php

class Car
{
    private $model = "A";
    public $color = "Gray";

    public function __construct()
    {
        echo "<h1> Welcome to the CAR World </h1>";
        // How to access private data member
        echo $this->model;
        // this : this is a Keyword which is used to access current object.
    }
    public function showInfo()
    {
        return "<h2>This is the basic information of CAR</h2>";
    }
}

// Object creation of CAR class
$audi = new Car();
echo $audi->showInfo();
// echo $audi->model
echo $audi->color;
?>