<?php

//////////
/*

while syntax

while(condition)
{
    //code
}

Do-While syntax

do
{
//code
}
while(condition);

for syntax

for(Initilize,length,increment/decrement)
{
//code
}

for-each syntax

foreach($array as $value)
{

}

for-each syntax

foreach($array as $key>$value$)
{

}

*/
$x=5;
$y=6;
$z=7;
$cars=array('bmw','audi','alto','maruti','scorpio','mercedez');

echo '************************************While example*****************************';

while($x<15)
{
    echo 'number is'.$x.'<br>';
    $x++;
}





echo '************************************Do While example*****************************';

do{
    echo 'number is'.$y.'<br>';
    $y++;
}
while($y <= 10);


echo '************************************For example*****************************';

for($z=0;$z<8;$z++)
{
    echo 'number is '.$z.'<br>';
}


echo '************************************For with array example*****************************';
echo'<br>';

echo '<pre>'.print_r($cars,true).'</pre>';


for($w=0;$w<sizeof($cars);$w++)
{

    //echo $w;
  echo 'Car name is '  .$cars[$w].'<br>';
}

echo '************************************Foreach example*****************************';
echo'<br>';
foreach($cars as $value)
{
    echo 'Car name is '.$value.'<br>';
}

echo '************************************Foreach with key example*****************************';
echo'<br>';
foreach($cars as $key=>$value)
{
    echo 'Car name is '.$cars[$key].'<br>';
}


echo '************************************Foreach with switch example*****************************';
echo '<br>';

foreach($cars as $key=>$value)
{
    
    switch($value){
        case 'bmw':
            echo 'Car name is '.$cars[$key].' and colour is black<br>';            
            break;
        case 'audi':
            echo 'Car name is '.$cars[$key].'<br>';            
            break;
        case 'alto':
            echo 'Car name is '.$cars[$key].'<br>';            
            break;  
        case 'maruti':
            echo 'Car name is '.$cars[$key].'<br>';            
            break;  
        case 'scorpio':
            echo 'Car name is '.$cars[$key].'<br>';            
            break;  
        case 'mercedez':
            echo 'Car name is '.$cars[$key].'<br>';            
            break;      
        default:
            echo 'No Car'; 
               
    }
      
}
?>
