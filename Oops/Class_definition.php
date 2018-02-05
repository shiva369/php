<?php
class Cars{
	var $wheel_count =2;
	var $door_count=4;
	function car_details(){
		
		return "this car has ".$this -> wheel_count. " wheels";
		
	}
	
	
}
$Bmw = new Cars();
$mercedes = new Cars();
 echo $Bmw -> wheel_count =10;
 echo "<br>";
 echo $mercedes -> door_count;
 echo "<br>";
 echo $mercedes -> car_details();




$the_methods = get_class_methods('Cars');
foreach ($the_methods as $method){
	echo $method . "<br>";
}
$my_classes = get_declared_classes();// this is pre defined fuction that tell you declared classes
foreach ($my_classes as $class){
	echo $class . "<br>";
}

?>
