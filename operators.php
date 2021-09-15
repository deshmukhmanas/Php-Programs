<?php

/* Arithmetic Operators

+ 
-
*
/
%
** Exponentiation

*/

$num1 = 10;
$num2 = 12;

echo "Addition <br>";
echo $num1 + $num2 . '</br>';




echo "Sub <br>";
echo $num2 - $num1 . '</br>';




echo "Mul <br>";
echo $num1 * $num2 . '</br>';



echo "Div <br>";
echo $num2/$num1 . '</br>';






echo "Modulus <br>";
echo $num2%$num1 . '</br>';

//echo 12%6 . '</br>';





$num3 = 4;
$num4 = 2;


echo "Exponentiation <br>";
echo $num3**$num4 . '</br>';




/* Assignment operators

   x=y
   x+=y
   x-=y
   x*=y
   x/=y
   x%=y

*/


$x = 12;
//$x +=100; // 12 + 100 = 112
//$x -=2; // 12-2 =10
$x *= 2; // 12*2= 24
//$x /= 2; // 12/2= 6
//$x %= 5; // 12%5= 2


echo $x;


/* Comparison operators

   x==y // equal
   x===y //identical
   x!=y // not equal
   x<>y // Not equal
   x!==y // Not identical
   x<y
   x>y
   x<=y
   x>=y
   x<=>y


*/

echo  "</br> ================== Spaceship ===================</br>";
$x = 5;
$y = 10;

$a=11;
$b=11;
echo "</br>";
var_dump($a==$b);




echo "</br>";
var_dump($a===$b);





echo "</br>";
var_dump($a!=$b);



echo "</br>";
var_dump($a>$b); 

echo "</br>  spaceship ";

echo ($a <=> $b); // returns -1 because $a is less than $b
echo "</br>";





$x= 10;
$y = 10;

var_dump($x<=>$y); //spaceship
echo ($x <=> $y); // returns 0 because $x is equal to $y
echo "</br>";


$x= 15;
$y = 10;

var_dump($x<=>$y); //spaceship
echo ($x <=> $y); // returns +1 because $x is greater than to $y



$x = 12;
$y = 13;

var_dump($x<=>$y);
echo ($x <=> $y);

?>


