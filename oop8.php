<?php

// undrasting abstract class and abstract method 

abstract class Ami{

     abstract public function amra(); // abstract method cant have body and must implement in child class 

     public function tara(){
          return "they are fine";
     }
}

class Tumi extends Ami{

	public function amra(){
		return "we are fine";
	}


}

$every = new Tumi();

echo $every->amra()."<br>";
echo $every->tara();
