<?php 

class Earth{
	protected $banglasesh = ['dhaka','khulna','barisal','rangpur'];
	protected $India = ['mumbai','kolkata','delhi'];
	private $america = "Washinton";

	public function bn(){
		return "capital city is ".$this->banglasesh[0];
	}
	public function in(){
		return "capital city is ".$this->india[2];
	}
	public function us(){
		return "capital city is ".$this->america;
	}

}


class Saarc extends Earth{
	public function Sc(){
		return "saarc city is ".$this->banglasesh[0];
	}


}

$bangladesh = new Saarc();

echo $bangladesh->Sc();
echo $bangladesh->Bn();



