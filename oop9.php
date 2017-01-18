<?php

// object iteration

class Ami{

	public $Name = "Mahfuz";
	public $Age = 22;
	public $Profession = "Developer";
	public $Hometown = "Khulna";
	public $Livesin = "Dhaka";

}

$info = new Ami();

foreach($info as $key => $value){

	echo $key." : ".$value."<br>";

}