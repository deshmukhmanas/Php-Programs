<?php

/**
 * 
 * switch(n){
 * 
 *   case label1:
 *          code1;
 *          break;
 *   case label2:
 *          code2;
 *          break;
 *   case label3:
 *          code3;
 *          break;
 *   ....
 *   default:
 *        default code to be execute
 * }
 * 
 */


$mycar =  "Vaspa";


switch ($mycar){
   
    case "BMW":
        echo "Your car name is BMW!";
        break;

    case "Audi":
        echo "Your car name is Audi!";
        break;
    case "Audi2":
        echo "Your car name is Audi v.2.0!";
        break;
    default:
        echo "You dont have any car!";

         


}



?>