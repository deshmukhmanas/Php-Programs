<?php
class Car{
 public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
 }   
 public function get_data(){
     echo 'Name of car is '.$this->name.'<br>'.'Color is '.$this->color;
 }
}

class BMW extends Car{
    public function inputdata($data){
        echo $data;
    }
}

$carhistory=new Car('BMW','Red');
$vehicle=$carhistory->get_data();

$bmw=new BMW('BMW','Red');
$bmw->inputdata($vehicle);

?>