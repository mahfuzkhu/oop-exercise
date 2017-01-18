<?php 

// self, constant , static 

class Khabo{

	const RAN = 2;
	public $murgi = 20;

	static $totalRAN = self::RAN*20;


	public $murgirtotalDim = 20;


	const MOROGER_DIM = 0;

	public function Morog() {

		return "morog dim pare na but moroger ".self::RAN."ta ran ace"."<br>";
	}

	public function dimKhabo(){

		return $this->murgirtotalDim." ta dim O ami khabo"."<br>";
	}
}

$Morog = new Khabo();

echo $Morog->Morog();

echo "total ran ".Khabo::$totalRAN. " ta e ami khabo";

echo "<br>";
echo $Morog->dimKhabo();