<?php

//*************************Parent class******************************* */
class PC{

    public $name;
    protected $brand;
    private $modelno;

    public function __construct($name){


        $this->name = $name;

    }

    protected function brandname($br){

        $this->brand = $br;

    }
    private function modelnumber($mn){

        $this->modelno = $mn;

    }

    private function getname(){

        echo '<br>Name of PC is '.$this->name.'<br>';

    }

    protected function getname2(){

        $this->getname();
    
      }
}

//*****************************Child Class************************************* 
class Laptop extends PC{
    
    public function info(){

        echo "What is name of PC?</br>";

        $this->getname2();

    }
    public function myinfo($firstname){

        echo '<br>'.$firstname.'.';
    }

}

$lpname =  new Laptop("Dell");
$lpname->info();
$lpname->myinfo('Hello');
?>