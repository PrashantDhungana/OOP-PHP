<?php
// Regular Class
// class NewClass{
// 	public $a;

// 	public function something(){
// 		$this->a="Hey";
// 		echo $this->a;
// 	}
// }
// $objForNew=new NewClass;
// $objForNew->something();

//Abstract Class
// abstract class NewClass{
// 	public $a;

// 	public function something(){
// 		$this->a="Hey";
// 		echo $this->a;
// 	}
// }
// $objForNew=new NewClass;
// $objForNew->something();


//*************Note:Method can also be an abstract method but if there is at least one abstract method in the class the class should also be an abstract class****************
//We make a function abstract to make the class ready to expect a predetermined function which the subclass will have 


//Abstract Class with Abstract method
abstract class NewClass{
	public $a;
	abstract public function WW3();//The class which will extend must have WW3 method inside it
}

class Naya extends NewClass{
	private function WW3(){
		echo "string";
	}

	public function NayaMethod(){
		$this->a="Hello";
		echo $this->a;
	}
}
$objForNaya=new Naya;
$objForNaya->NayaMethod();

/*Real life examples:
1.Imagine you are making an application that deals with employee’s of a company.
you have a class of Human and a child class of Employee,Guest,Connection.
you will have multiple types of humans,
you will never have a human without a type (by type i mean a child class).
this is why you will make the Human class abstract so that you wont be able to make an object of it directly

2.An abstract class of vehicle have a abstract function start_engine.*/