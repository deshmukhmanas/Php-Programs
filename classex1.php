<?php
abstract class Classroom{
	public $srno;
	public $name;
	public $age;
	public $emailid;
	public $phone;
	public function __construct($srno,$name,$age,$emailid,$phone){
		$this->srno=$srno;
		$this->name=$name;
		$this->age=$age;
		$this->emailid=$emailid;
		$this->phone=$phone;
	}
abstract public function student_view() : string;
	
}

class divisionA extends Classroom{

	public function student_view():string{

		echo 'Student number is: '. $this->srno .'<br>'.'Student name is: '.$this->name.'<br>'.'Student age is: '.$this->age.'<br>'.'Student emailid is: '. $this->emailid.'<br>'.'Student phone is: '.$this->phone.'<br>';
	
	}
}

class divisionB extends Classroom{

	public function student_view():string{

		echo 'Student number is: '. $this->srno .'<br>'.'Student name is: '.$this->name.'<br>'.'Student age is: '.$this->age.'<br>'.'Student emailid is: '. $this->emailid.'<br>'.'Student phone is: '.$this->phone.'<br>';
	
	}
}




$divA =  new divisionA("1","Alpesh","25","alpeshtrada@gmail.com","234466443");
 echo $divA->student_view();
 
 
$dvB = new divisionB("2","Suyash","26","suyashkale@gmail.com","5654446634");
 echo $dvB->student_view();
 echo "</br>";

