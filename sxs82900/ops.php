<?php
/*class Car{
	private $model = '';
	//__construct
	public function __construct($model = null){
		if($model){
			$this ->model = $model;
		}
	}
	public function getCarModel(){
		//using magic __class__ to get the class
		return "The <b>" . __CLASS__ . "</b> model is: " . $this -> model;
	}

}
$car1 = new Car('mercedes');
echo $car1 -> getCarModel();
*/
//__LINE__ to get the line number in which the constant is used.
//__FILE__ to get the full path or the filename in which the constant is used.
//__METHOD__ to get the name of the method in which the constant is used.
?>
<?php
//main advantage of inheritance is reduce the code dupliction
//we can create a  reusable piece of code  
// how can class inherit the code of another class
class Car{
	//private 
	private $model;
	public function setModel($model){
		$this -> model = $model;
		
	}
	public function hello(){
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}
class Sportscar extends Car{
	private $style ='fast and furious';
	  public function driveItWithStyle()
  {
    return 'Drive a '  . $this -> hello() . ' <i>' . $this -> style . '</i>';
  }

}
$sportscar = new Sportscar();
$sportscar -> setmodel('mercedes benz');
echo $sportscar -> driveItwithStyle();
	

?>