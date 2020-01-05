<?php
//Create class

class Person{
	//Properties
	public $name;
	public $age;
	public $address;


	//Methods
	public function speak(){
		echo "I am Speaking";
	}
}
$abc=new Person;
$abc->speak();