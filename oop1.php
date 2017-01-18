<?php

// understanding Class,object,property,method and this keyword...


// understanding instance ...



class ShopProduct{
	

}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

// By passing our objects to var_dump(), I extract useful information including, after the hash sign of output, each object’s internal identifier.

var_dump($product1); 
var_dump($product2);

echo "<br>";


class Sports{

	public $name;
	public function showName(){
		return "my name is ".$this->name;
	}


}



$cricket = new Sports();
$cricket->name = "cricket";
echo $cricket->showName()."<br />";



$football = new Sports();
$football->name = "Football";
echo $football->showName()."<br />";



echo $cricket->name."<br />";
echo $football->name."<br />";




