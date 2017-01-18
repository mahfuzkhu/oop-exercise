<?php

/***
__get

__set

__call

 ***/


class Food {
    
    var $name;
    var $origin;
    var $taste;
    var $price;
    var $pro1;
    var $pro2;
    
    function __construct($name = "", $origin = "", $taste = "", $price = "") {
        $this->name = $name;
        $this->origin  = $origin;
        $this->taste  = $taste;
        $this->price = $price;
        $this->pro1 = 0;
        $this->pro2 = 0;
       
        echo "I am inside construct <br />";
    }
    
    function __get($name) {
        echo "Sorry $name is not part of this object";
    }
  
    function __call($name, $params) {
        echo "$name - method not found";
    }
    
    function __destruct() {
        echo "I am destructing <br />";
    }
    
    function getName() {
        return $this->name;
    }
    
    function setName($name) {
        $this->name = $name;
    }
    
    function show() {
        //echo "I am from food";
        echo $this->getName()."<br />";
        
    }
}


$biryani = new Food("Chicken Biryani", "India", "Good", "Affordable");

echo $biryani->show();

//$biryani->name = "Hydrabadi chicken biryani";
$biryani->setName("Hydrabadi chicken biryani");

echo $biryani->show();


$biryaniName = serialize($biryani);

var_dump(unserialize($biryaniName));


$muttonBiryani = new Food;
echo $muttonBiryani->show();

echo $muttonBiryani->showMyName();

$muttonBiryani->name = "Bogurar doi";
$muttonBiryani->origin = "Bangladesh";
$muttonBiryani->taste = "superb";
$muttonBiryani->price = "Affordable";
 

