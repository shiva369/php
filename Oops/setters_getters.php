<?php
class Cars{
	private $door =4;
	function get_values(){
		echo $this->door;
	}
	function set_values(){
		echo $this -> door =10;
	}
}
$bmw = new Cars();
$bmw-> get_values();
$bmw -> set_values();


?>