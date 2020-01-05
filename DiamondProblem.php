<?php
// $url=$_SERVER['REQUEST_URI'];
// $url=explode('/', $url);

class SuperClass
{
    protected function greet()
    {
        echo "Grandparent";
    }
}

// First Parent class
class ClassA extends SuperClass
{
    protected function greet()
    {
        echo "Parent1";
    }
}
 
// Second Parent class
class ClassB extends SuperClass
{
    protected function greet()
    {
        echo "Parent2";
    }
}
 
class ClassC extends ClassA, ClassB
{
    public function test()
    {
        $c = new self();
        $c->greet();
    }
}