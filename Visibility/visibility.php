<?php

class Person{
	protected $first;
	public $last;
	public $age;

}

class Employee extends Person{
	public function show($data=NULL){
		var_dump($data);
		echo "<br>";
		echo "Hello!";
	}

	public function Another(){
		$this->show(12);
	}

}

