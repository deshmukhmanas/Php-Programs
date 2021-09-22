<?php

function information($t_info){

    $final_data=array();
    $teainfo=array();

    foreach($t_info as $teacher_num => $teachers_data){

        echo "<pre>".print_r($teachers_data,true)."</pre>"; 

        foreach($teachers_data as $t_key => $t_value){

            if ($t_key == 0){

                $teainfo['Name'] =$t_value;
            }
            elseif($t_key == 1){
                
                $teainfo['Emailid'] =$t_value;

            }elseif($t_key == 2){
                
                $teainfo['city'] =$t_value;

            }
            elseif($t_key == 3){
                
                $teainfo['phone'] =$t_value;

            }
            elseif($t_key == 4){
                
                $teainfo['subname'] =$t_value;

            }
            else{
                echo 'Invalid';
            }
        }
        array_push($final_data,$teainfo);
    }
    $t_data = json_encode($final_data,true);   
    echo $t_data;
}


$teacher_a_data=array();

$teacher1=array('abc','abc@gmail.com','London','7586909403','Maths');
$teacher2=array('def','def@gmail.com','Ilford','9685764756','Science');

array_push($teacher_a_data,$teacher1);
array_push($teacher_a_data,$teacher2);
information($teacher_a_data);
?>