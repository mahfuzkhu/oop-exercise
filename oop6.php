<?php 

class ShopProduct {
	public $numPages;
	public $playLength;
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price;
 
	function __construct(
	$title, $firstName,
	$mainName, $price,
	$numPages=0, $playLength=0 ) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
		$this->numPages = $numPages;
		$this->playLength = $playLength;
	}
	 
	function getProducer() {
	return "{$this->producerFirstName}"." {$this->producerMainName}";
	}
	 
	function getSummaryLine() {
	$base = "$this->title ( {$this->producerMainName}, ";
	$base .= "{$this->producerFirstName} )";
	return $base;
	}
}
 
class CdProduct extends ShopProduct {
	function getPlayLength() {
	return $this->playLength;
	}
 
function getSummaryLine() {
	$base = "{$this->title} ( {$this->producerMainName}, ";
	$base .= "{$this->producerFirstName} )";
	$base .= ": playing time - {$this->playLength}";
	return $base;
	}
}
class BookProduct extends ShopProduct {
	function getNumberOfPages() {
	return $this->numPages;
	}
 
	function getSummaryLine() {
	$base = "{$this->title} ( {$this->producerMainName}, ";
	$base .= "{$this->producerFirstName} )";
	$base .= ": page count - {$this->numPages}";
	return $base;
	}
}

$cdproduct = new CdProduct("Dhaka, Bangladesh", null, "Miles", 10.99, null, 60.33 );
echo "artist:".$cdproduct->getProducer()."<br>";
echo $cdproduct->getSummaryLine()."<br>";