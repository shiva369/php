<?php

class Cars{
	static $door =4;
	static $wheel=9; 
	static function carDetails(){
		echo Cars::$door;
		echo Cars::$wheel;
	}
}
 echo Cars::$wheel;
 Cars::carDetails();
?>


