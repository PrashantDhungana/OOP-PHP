<?php
// $url=$_SERVER['REQUEST_URI'];
// $url=explode('/', $url);


//Interface acts as abstract method.
interface CheckForMethod{
    public function Check();
}


class SuperClass implements CheckForMethod
{
    public function Check(){
        echo "string";
    }
    protected function greet()
    {
        echo "Grandparent";
    }
}
$objForSuperClass=new SuperClass;
$objForSuperClass->Check();

// First Parent class
class ClassA extends SuperClass
{
    protected function greet()
    {
        echo "Parent1";
    }
}

class ClassC extends ClassA
{
    public function test()
    {
        $c = new self();
        $c->greet();
    }
}