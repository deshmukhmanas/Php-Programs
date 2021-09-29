<?php
/**
 * 
 * class Animal {
 *    
 *    public $soundType;
 * 
 *    public function makeSound($soundType){
 * 
 *        echo $soundType;
 * 
 * 
 *    }  
 * 
 * }
 * 
 * 
 * $cat =  new Animal("Meow");
 * $dog =  new Animal("Barking");
 * 
 * 
 */
interface Animal {

    public function makeSound();

}

class Cat implements Animal {

    public function makeSound(){

       echo "Meow!";
       echo "</br>";
       echo "I am cat";

    }

}


class Dog implements Animal {

    public function makeSound(){

       echo "Barking!";
       echo "</br>";
       echo "I am dog";

    }

}

class Tiger implements Animal {

    public function makeSound(){

       echo "Roar!";
       echo "</br>";
       echo "I am Tiger";

    }

}


$animal_cat  = new Cat();
//$animal_cat->makeSound();
//echo "</br>";

//echo "</br>";
//echo "</br>";

$animal_dog  = new Dog();
//$animal_dog->makeSound();
//echo "</br>";
//echo "</br>";

$animal_tiger  = new Tiger();
//$animal_tiger->makeSound();
//echo "</br>";


$animals = array($animal_cat,$animal_dog,$animal_tiger);

foreach ($animals as $animal_key => $animal_name){

     echo "</br>";

     echo $animal_key;
     echo print_r($animal_name,true);
     $animal_name->makeSound();

     echo "</br>";
     echo "</br>";




}







?>