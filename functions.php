<?php
/*
function my_info(){
    code
    
}

*/
$cars=array('bmw','audi','alto','maruti','scorpio','mercedez');

function my_info(){
    echo 'My name is Manas<br>';
    echo 'I am a student<br>';
    echo 'My email is manas.deshmukh4@gmail.com<br>';
}

my_info();


function my_info_2($name,$type,$email)
{
    echo 'My name is'. $name.'<br>';
    echo 'I am a '.$type.'<br>';
    echo 'My email is'.$email.'<br>';
}


my_info_2('Manas','Student','manas.deshmukh4@gmail.com');

function my_cars_2($value)
{

    echo 'Car name is'.$value.'<br>';

}

foreach($cars as $values)
{
    my_cars_2($values);
}
?>