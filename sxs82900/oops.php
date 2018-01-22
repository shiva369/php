<?php
class Demo{
	public $age;
	public $name;
	public $gender;
	public  function __construct($a,$n,$g){
		$this->age = $a;
		$this->name = $n;
		 $this->gender = $g;
		
	}
	public function setDetails($a,$n,$g){
			$this->age = $a;
			$this->name = $n;
			$this->gender = $g;
	}
	public function getDetails(){
			return $this->age.' '.$this->name.' '.$this->gender;
}
}
$de= new Demo(24,'shiva','M');
$details = $de->getDetails();
print_r($details);
exit;
?>