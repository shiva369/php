<?php
interface Car{
	public function setModel($name);
	public function getModel();
	//An interface commits its child classes to abstract methods that they should implement.
}
interface Vehicle{
	public function setHaswheels($bool);
	public function getHasWheels();
}
class miniCar implements Car,Vehicle{
	private $model;
	private $haswheels;
	public function setModel($name){
		$this -> model = $name;
	}
	public function getModel(){
		return $this -> model;
	}
	public function setHasWheels($bool)
  { 
    $this -> hasWheels = $bool; 
  }
  
  public function getHasWheels()
  {
  return ($this -> hasWheels)? "has wheels" : "no wheels";
  }
	
}
$shiva = new getModel();
$shiva->

?>