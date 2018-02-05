<?php
class cars{
	var $wheels_count =4;
	function gretting(){
		echo"hello";
		
	}
}
$bmw = new Cars();
class Trucks extends Cars{// for the inharetance we will use extend command
	
}
$yacoma = new Trucks();
echo $yacoma->gretting();
?>
