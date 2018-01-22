<?php
abstract class car{
	//non abstrract proprty
	protected $tankVolume;
	//non abstract method
	public function setTankVolume($volume){
		$this -> tankVolume = $volume;
	}
	//abstract method
	abstract public function calcNumMilesOnFullTank();
	
}
class Honda extends Car{
	// adding code to abstract method in child body
	public function calcNumMilesOnFullTank(){
		$miles = $this -> tankVolume*30;
		return $miles;
	}
}
class Toyato extends Car{
	public function calcNumMilesOnFullTank(){
		$miles = $this -> tankVolume*33;
		return $miles;
	}
	public function getColor(){
			return "beep";
	}
	
}
$toyoto = new Toyato();
$toyoto ->  settankVolume(10);
echo $toyoto -> calcNumMilesOnFullTank();//330
echo "<br>";
echo $toyoto -> getColor();

?>