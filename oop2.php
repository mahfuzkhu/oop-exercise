<?php

// Magic method: Construct , Destruct 


class user {

public function __destruct(){

		echo "there user is and ".$this->rahim();

	}	

	public function rahim(){
		return "rahim is another user";

	}

	public function __construct($k){

		echo "here user is"." ".$k." and ".$this->rahim();

	}

} 


$user = new user("karim");




/***

class Database {

	protected $userName;    // protected as vesiblity keyword
	protected $password;
	protected $dbName;

	public function __construct($UserName,$Password,$DbName){

		$this->userName = $UserName;
		$this->password = $Password;
		$this->dbName = $DbName;
	}

}

$db = new Database ('root','1234','silex_project');

***/