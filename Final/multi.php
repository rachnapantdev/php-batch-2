<?php
class A
{
    public function functionA()
    {
        echo "This is Class A  <br>";
    }
}
class B extends  A
{
    public function functionB()
    {
        echo "This is Class B  <br>";
    }
}
class C extends B
{
    public function functionC()
    {   
        echo "This is Class C <br>";
    }
}


$c =  new C();
$c->functionA();
$c->functionB();
$c->functionC();


?>