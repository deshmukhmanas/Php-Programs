<?php


class trainer {
   


    public static $uniname='hertfordshire';
    public static function trainers_info(){

       echo "This is trainer info function as static!";

    }
    public function persons(){
        self::trainers_info();
    }
   
}

class staff extends trainer{
    public function  __construct(){
$this->info=parent::trainers_info();
    }

}

// calling static method
//trainer::trainers_info();
echo'<br>';


//$person=new trainer();
echo'<br>';
//$person->persons();
echo'<br>';

$st1=new staff();
echo '<br>';
echo trainer::$uniname;

?>