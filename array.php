<?php

declare(strict_types =1);

function myname($fistname, $lastname = null){

   echo 'My name is ' . $fistname. ' '.$lastname .'</br>';


}


function result($name, $result_flag = "Fail", int $marks = null){


     echo "Result of $name is $result_flag  and marks $marks</br>";

}


myname("Krishna");
result("Jay","", 67);

// call by value
function addNumbers(int $num1, int $num2){

     return $num1 + $num2;

}


echo addNumbers(7,12). "</br>";


// call by reference
function age_after_seven(&$value){


  echo  "It is from function ".$value +=7;
  echo "</br>";

} 


$num = 21;

age_after_seven($num);

echo "My age is after 7 years: ". $num;

$array = array("Rutu","23"); // Indexed array

$age =  array("Rutu" => "23", "Jay"=> "26","Suyash"=> "30","Alpesh"=> "25","Manas"=> "24");// Assosiative array

$name_age=array(
    array('Name' => 'Rutu','Age' => 23),
    array('Name' => 'Jay','Age' => 24),
);
$cars_multi_index =  array(

    array("Volvo","abc",19),
    array("BMW","xyz",20),
    array("AUDI","wer",21),
    

);

$car_index=array(5,2,13,50,11,25,7);
$cars_1=array('BMW','Volvo','Suzuki','Audi');
$cars =  array(

    ("car1")=> array("carname"=>"Volvo","model"=>"abc","Year"=>19),
    ("car2")=> array("carname"=>"BMW","model"=>"cdf","Year"=>20),
    ("car3")=>  array("carname"=>"AUDI","model"=>"xyz","Year"=>21),


);




$data =  array(

       array("cars" =>array(
            array("Maruti","tbz","21"),
            array("Volvo","abc",19),
            array("BMW","xyz",20),
            array("AUDI","wer",21),
       )),
       array("Bikes" => array( 
           array("Pulser","qwe","21"),
           array("BMW","ert",19),
           array("Suzuki","qaz",20),
           array("CT","plm",21),
       ))


);

echo "</br>======================Indexed Array=====================</br>";
echo "<pre>".print_r($array,true)."</pre>";

echo "======================Assosiative Array=====================</br>";
//echo "<pre>".print_r($age['Rutu'],true)."</pre>";
//echo "<pre>".print_r($age['Jay'],true)."</pre>";
echo "<pre>".print_r($name_age[1]['Age'],true)."</pre>";
//echo "<pre>".print_r($age['Rutu'],true)."</pre>";

echo "======================Ascending sort=====================</br>";

asort($age);

echo '<pre>'.print_r($age,true).'</pre>';

echo "======================Ascending reverse sort=====================</br>";

arsort($age);

echo '<pre>'.print_r($age,true).'</pre>';
echo "======================k sort=====================</br>";

ksort($age);

echo '<pre>'.print_r($age,true).'</pre>';

echo "======================k reverse sort=====================</br>";

krsort($age);

echo '<pre>'.print_r($age,true).'</pre>';


echo "======================Multi Dimentional Array as indexed=====================</br>";
echo "<pre>".print_r($cars_multi_index,true)."</pre>";

echo "<pre>".print_r($cars_multi_index[2],true)."</pre>";

echo "======================Multi Dimentional Array as associative=====================</br>";
echo "<pre>".print_r($cars['car2'],true)."</pre>";


echo "======================Data nasted array=====================</br>";
echo "<pre>".print_r($data,true)."</pre>";
echo "<pre>".print_r($data[1]['Bikes'][2],true)."</pre>";

echo '=======================Sorted cars array==========================</br>';

sort($cars_1);

echo '<pre>'.print_r($cars_1,true).'</pre>';

echo '=======================Sorted car index array==========================</br>';

rsort($car_index);

echo '<pre>'.print_r($car_index,true).'</pre>';


?>