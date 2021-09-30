<?php

abstract class Bikes{
    public $name;
    public $color;

    public function __construct($name,$color){

        $this->name = $name;
        $this->color = $color;
    }

    abstract public function view($color) : string;

}

class Pulsar extends Bikes{
    public function view($color) : string{

        return "Bike name is ". $this->name  . " " .$this->color  . ". I am french prodcut.";
    }
}

class Hayabuza extends Bikes{
    public function view($color,$wheels=null) : string {

        return "Bike name is ". $this->name . " " .$this->color ." with " .$wheels. " wheels"  . ". My price is £60000";
    }
}

$pulsar=new Pulsar('pulsar','Red');
echo $pulsar->view("Red");
echo "</br>";

$hayabuza=new Hayabuza('Hayabuza','White');
echo $hayabuza->view('White','2');

?>