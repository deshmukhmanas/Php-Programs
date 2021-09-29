<?php
/**
 * 
 *  parent class
 *        inherit class
 *                sub-inherit class 
 *
 * 
 *  trait Traitname {
 *     // logic
 * 
 *   }
 *    
 *  use Traitname;
 * 
 *  
 */

trait message {

    public function msg1(){

      echo "This is msg1!";

    }

}


trait message2 {

    public function msg2(){

      echo "This is msg2!";

    }

}

trait message3 {

  public function msg3(){

    echo "This is msg3!";

  }

}


class Greetings{

   use message,message2,message3;

}


class Test1 extends Greetings{

    use message2;

    public function testfun(){

        
        echo "test fun";

    }

}


$greeting_1 = new Greetings();

$greeting_1->msg1();
$greeting_1->msg2();
$greeting_1->msg3();

echo "</br></br> This is inheited class object also using traits as well </br>";

$greeting_2 =  new Test1();
$greeting_2->msg1();
$greeting_2->msg2();
$greeting_2->msg3();
$greeting_2->testfun();







?>