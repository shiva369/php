<?php
class Cars{
	static $door = 5;
	static function carDetails(){
		return Cars::$door;
	}
}
class Truck extends Cars{
	static function TruckDetails(){
		echo parent::carDetails();
	}
	
}
Truck::TruckDetails();

?>