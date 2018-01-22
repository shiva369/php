
<?php
class Car{
	//declare the class
	//properties
	public $comp;
	public $color = 'begin';
	public $hassunroof = true;
	//method hello
	public function hello(){
		return "beep i am .$this->comp. and i am .$this->color;";
	}
	
	}
	//create an instance
	$bmw = new car();
	$mercedes = new car();
	//get the values
	 echo $bmw->hello();
	 echo "<br>";
	 echo $mercedes->hello();
	 //set the values 
	 $bmw-> color ="blue";
	 $bmw->comp="BMW";
	 $mercedes -> comp ="mercedes benz";
	 //get the values
	 echo $bmw ->color;//blue
	 echo "<br>";
	 echo $mercedes->color;//begin
	 echo "<br>";
	 echo $bmw->comp;//bmw
	  echo "<br>";
	  echo $mercedes-> comp; // mercedes benz
	  echo "<br>";
	  echo $mercedes->hello();
	 
?>