<?php

class Student {

    public $name;
    public $email;
    public $phone;

//***********************************************constructor function********************************************
    function __construct($name,$email,$phone){

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;


    }


   /*

    //Methods
    function set_student_data($name,$email,$phone) {

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

    }

   */

/*
    function get_student_data(){


        //echo '<pre>'.print_r($this,true).'</pre>';

        return "name is " . $this->name ." <br>email is " . $this->email . '<br> phone is '. $this->phone;

    }*/

    function __destruct(){
        //$this->name = null;
        echo "</br> The Name is {$this->name}.</br>";


     }
}

$student=new Student('manas','manas.deshmukh4@gmail.com','654636337');

if(($student  instanceof Student)){

   // $dog->set_animal('ger','bhooo');
    //echo $student->get_student_data();
    echo "</br>";

}

?>