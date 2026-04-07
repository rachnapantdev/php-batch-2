<?php
    class A{
        public function sayHello(){
            echo "Hello I Am Class A <br>";
        }
    }

    class B extends A{
        public function sayHi(){
            echo "Hi, I am Class B";
        }
    }

// Object creation 

    $b = new B();
    $b->sayHello();
    $b->sayHi();

?>