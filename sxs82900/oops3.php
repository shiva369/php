<?php
class Car{
	public $tank;
	//add gallone of fuel to tank
	public function fill($float){
		$this->tank+= $float;
		return $this;
	}
	//number of miless 
	public function ride($float){
		$miles = $float;
		$gallons = $miles/50;
		$this-> tank-= $gallons;
		return $this;
	}
}
//creat the instance
$bmw = new car();
$tank = $bmw -> fill(10) -> ride(40) -> tank;
 
// Print the results to the screen.
echo "The number of gallons left in the tank: " . $tank . " gal.";

//$tank = $bmw -> fill(10) -> ride(40) -> tank;

//echo "The number of gallons left in the tank: " . $tank . " gal.";

?>