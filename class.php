<?php




class Fruit {

    public $name;
    public $color;

    //Methods
    function set_fruit($name,$color) {

        $this->name = $name;

        $this->color = $color;

    }


    function get_fruit(){


        //echo '<pre>'.print_r($this,true).'</pre>';

        return "Fruit is " . $this->name ." and color is ". $this->color;

    }

  /*  function get_color(){


     return $this->color;


  }*/
/*
      function __destruct(){
            $this->name = null;
         echo "</br> The fruit is {$this->name}.</br>";


      }

*/
      function fruit_data(){


        //echo '<pre>'.print_r($this,true).'</pre>';

        return "Fruit is " . $this->name ." and color is ". $this->color;

    }


}


class Animal {

     public $name;
     public $voice;

     function set_animal($name,$voice){

        $this->name = $name;
        $this->voice= $voice;
     }

     function get_animal(){

        return "Animal is " . $this->name ." and voice is ". $this->voice;

     }
}


$dog =  new Animal();

$apple = new Fruit();
$banana = new Fruit();
$mengo = new Fruit();



if(($dog  instanceof Animal)){

    $dog->set_animal('ger','bhooo');
    echo $dog->get_animal();
    echo "</br>";



}


if(($banana  instanceof Fruit)){

    $banana->set_fruit('Banana','Yellow');
    echo $banana->get_fruit();
    echo "</br>";


}



if(($mengo  instanceof Fruit)){

    $mengo->set_fruit('Mengo','Green');
    echo $mengo->get_fruit();
    echo "</br>";

}


//echo $banana->fruit_data();
echo "</br>";



$dog->set_animal('GermanShefard','bhavvv');
echo $dog->get_animal();





//$apple->set_color('Red');
//$banana->set_color('Yellow');
//$mengo->set_color('Green');






//echo $apple->get_color();
//echo "</br>";
//echo $banana->get_color();
//echo "</br>";
//echo $mengo->get_color();


// Public, Protected, Private for next session


?>