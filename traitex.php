<?php

trait subject1{
    public function java(){

        echo "This is java!";
  
      }
}
trait subject2{
    public function php(){

        echo "This is php!";
  
      }
}
trait subject3{
    public function mysql(){

        echo "This is mysql!";
  
      }
}

class Students{
    use subject1,subject2,subject3;
}

class manas extends Students{

    use subject3;

    public function testfun(){

        
        echo "test fun";

    }

}

$st1 = new Students();

$st1->java();
$st1->php();
$st1->mysql();

$st2 = new manas();

$st2->java();
$st2->php();
$st2->mysql();
$st2->testfun();


?>