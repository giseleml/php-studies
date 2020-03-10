<?php
class User {
	public $username;
	public $id;
	
	function greetUser() {
	echo "Welcome, " . $this->username . ". Your id number is " . $this->id;	
	}
}

$johndoe = new User;
$johndoe->username = 'johndoe21';
$johndoe->id = 4004;

$johndoe->greetUser();
?>
