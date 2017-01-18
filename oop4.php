<?php

// magic method : __get

class Person {
	
	public function __get( $property ){
		$method = "get".$property;

		if( method_exists( $this, $method ) ) {
			return "my name is ".$this->$method();
		}
	}

	public function getName(){
		return "Mahfuz";
	}
}

$person = new Person();

echo $person->Name;





/*** When a client attempts to access an undefined property, the __get() method is invoked. I have implemented __get() to take the property name and construct a new string, prepending the word “get”. I pass this string to a function called method_exists(), which accepts an object and a method name and tests for method existence. If the method does exist, I invoke it and pass its return value to the client. So if the client requests a $name property ***/