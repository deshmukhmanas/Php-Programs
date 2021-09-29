<?php


$data =  array(

    ("students") =>array(
         array('Name'=>'Manas','Email'=>'manas.deshmukh4@gmail.com','Add'=>'London'),
         array('Name'=>'Suyash','Email'=>'kalesuyash@gmail.com','Add'=>'Hatfield'),
         array('Name'=>'Alpesh','Email'=>'alpeshtrada@gmail.com','Add'=>'Ilford'),
         array('Name'=>'Jay','Email'=>'jaypal@gmail.com','Add'=>'Oxford'),
    ),
    ("teachers") => array( 
        array('Name'=>'John','Email'=>'john@gmail.com','Add'=>'Romford'),
        array('Name'=>'Volker','Email'=>'volker@gmail.com','Add'=>'Birmhingham'),
        array('Name'=>'Shabnam','Email'=>'shabnam@gmail.com','Add'=>'USA'),
        array('Name'=>'Alex','Email'=>'alex@gmail.com','Add'=>'Germany'),
    )


);

echo json_encode($data,true);
?>
