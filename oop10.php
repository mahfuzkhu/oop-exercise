<?php

// interface...

interface Cricketer {
    
   public function average($av);

}
interface Teacher {
    
   public function teachingPeriod($tp);

}


class Sakib implements Cricketer{
	public function average($av){
		return 'average runrate '.$av;
	}
}

class profession implements Cricketer,Teacher {

	public function average($av){
		return 'average runrate '.$av;

	}
	public function teachingPeriod($tp){

		return 'teaching period '.$tp.' years';

	}

}    // A class can both extend a superclass and implement any number of interfaces

$cricketer = new Sakib;
$profession = new profession;


echo $cricketer->average(65).'</br>';
echo $profession->average(68).'</br>';
echo $profession->teachingPeriod(25);

