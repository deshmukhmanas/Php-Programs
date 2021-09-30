<?php
function students($data){
   
    echo json_encode($data);
    
}

$data=array(

    ("students") =>array(
         array('Name'=>'Manas','Email'=>'manas.deshmukh4@gmail.com','Add'=>'London'),
         array('Name'=>'Suyash','Email'=>'kalesuyash@gmail.com','Add'=>'Hatfield'),
         array('Name'=>'Alpesh','Email'=>'alpeshtrada@gmail.com','Add'=>'Ilford'),
         array('Name'=>'Alex','Email'=>'alex@gmail.com','Add'=>'Goodmayers'),
         array('Name'=>'Michael','Email'=>'michael@gmail.com','Add'=>'Sheffield'),
         array('Name'=>'Peter','Email'=>'peter@gmail.com','Add'=>'Wales'),
         array('Name'=>'Mike','Email'=>'mike@gmail.com','Add'=>'England')));

students($data);         
?>