<?php

class Human {

   public $name;
   protected $email;
   private $phone;


   public function __construct($name){

    $this->name = $name;

   }

   /*function set_name($n){ // public function by default

    $this->name = $n;

  }*/
  
  protected function set_email($e){ // protected function

    $this->email =  $e;  


  }

  private function set_phone($p){ //private function

    $this->phone =  $p;

  }

  private function about(){
    
     echo "Human name is {$this->name}.</br>";

  }

  protected function about2(){

    $this->about();

  }



} 


class Robo_human extends Human{
    
     public function info(){

         echo "What is my name?</br>";

         $this->about2();

     }


}


$krishna =  new Robo_human("Krishna");
$krishna->info();
$krishna->about2();



//$jay = new Human();
//$jay->name = "Jay"; 
//$jay->email = "j@rmail.com"; 
//$jay->phone = "0777232456"; 

//$jay->set_name("Jay");
//$jay->set_email("j@gmail.com");
//$jay->set_phone("0453211111");


//echo '<pre>'.print_r($jay,true).'<pre>';




?>


