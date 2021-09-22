<?php



function data($data_info)
{
    $result = array();
    $info = array();

   // echo "<pre>".print_r($data_info,true)."</pre>"; exit;
  //  $info = array($name,$email,$address,$phone);
    // student loop
    foreach($data_info as $student_num => $student_data){

       echo "<pre>".print_r($student_data,true)."</pre>"; 

      // student data loop
       foreach($student_data as $s_key => $s_value){

        if($s_key == 0){

            $info['name'] = $s_value;

        }elseif($s_key == 1){

            $info['email'] = $s_value;
        }elseif($s_key == 2){

            $info['add'] = $s_value;
        }elseif($s_key == 3){

            $info['phone'] = $s_value;
        }else{


            echo "invalid case";
        }



       }

       array_push($result,$info);
        
       
        //  
        //

    }
 
    
    echo "<br><h1>My Details</h1><br>";
   // echo "<pre>".print_r($info,true)."</pre>";
    $s_data = json_encode($result,true);

    echo $s_data;
}

$student_g_data = array();

$suyash =  array("Suyash Pramod Kale","kalesuyash@gmail.com","London","+447502072382");

$jay =  array("jay","j@gmail.com","India","0877161656252");

$alpesh =  array("alpesh","a@gmail.com","canada","3636646327272");



array_push($student_g_data,$suyash);
array_push($student_g_data,$jay);
array_push($student_g_data,$alpesh);

data($student_g_data);


?>
