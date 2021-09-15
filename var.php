<?php

/*

local
global
static


*/

$firstname  = "Suyash"; // global scope

$lastname = "Kale";


echo "My name is $firstname $lastname";
echo "</br>";
echo "My name is " . $firstname." " .$lastname;
echo "</br>";
echo 'My name is ' .$firstname . ' ' .$lastname ;

echo "</br>";
echo "</br>";


$num1 = 25;
$num2 = 36;

echo $num1 + $num2;


function test1(){

    $name = "Jay"; //local scope // Data Type is string
    
    echo "</br>"; var_dump($name);


    global $firstname;

    $y = 100;// Data Type is integer

    echo "</br>"; var_dump($y);
    $z =  10.5 ;  // Data Type is float

    echo "</br>";var_dump($z);

    $flag  =  true; // Data Type is Boolean

    echo "</br>";var_dump($flag);

    $animals =  array("Cat","Dog","Tiger"); // Data Type is an Array as indexed array

    echo "</br>"; var_dump($animals);echo "</br>";

    static $x = 10;  // static scope and it is also local


    echo "Current value of x : ". $x .' and y :'.$y.'</br>';

    $x++;
    $y++;


    echo "Updated value of x : ". $x .' and y :'.$y.'</br>';

    echo "Global : i am inside the test function ". $firstname;

    echo "Local :i am inside the test function ". $name;

}

echo "</br>";
test1(); // c:  10,  u : 11
echo "</br>";
test1(); // c:: 11 , u : 12
echo "</br>";
test1(); // c: 12, u : 13

echo "</br>";
echo "i am oustside the test function " . $name ;

//echo "i am oustside the test function " . $firstname ;


function test ($name = string ,$email = string ,$phone){

    echo "</br> My name is ". $name . '</br>' ;
    echo "My email id is ". $email . '</br>' ;
    echo "My phone  no is ". $phone . '</br>' ;

}


class Animal{


    // code




}

$dog =  new Animal(); // Data Type is object

echo "</br>";
var_dump($dog);echo "</br>";

$test_null =  null; // Data Type is Null

var_dump($test_null);echo "</br>";




//test('Krishna@','adadsfs',+1222333);
?>