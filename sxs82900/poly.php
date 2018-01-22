<?php
interface shape{
	public function calcArea();
}
class Circle implements shape{
	private $radius;
	public function __construct($radius){
		$this-> radius =$radius;
	}
	public function calcArea(){
		
		return $this -> radius * $this ->radius * pi();
	}
}
class Rectangle implements shape{
	private $width;
	private $height;
	public function __construct($width,$height){
		$this -> width=$width;
		$this -> height= $height;
	}
	public function calcArea(){
		return $this -> width*$this-> height;
	}
}
$circ = new Circle(3);
$Rect = new Rectangle(3,4);
echo $circ->calcArea();
echo "<br>";
echo $Rect -> calcArea();
?>