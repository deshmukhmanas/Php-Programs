<?php
function teachers($teacher_info)
{
    $result = array();
    $info = array();
    foreach($teacher_info as $teacher_num => $teacher_data)
    {
        echo "<pre>".print_r($teacher_data,true)."</pre>";
        foreach($teacher_data as $t_key => $t_value)
        {
            if($t_key == 0){
                $info['name'] = $t_value;
            }
            elseif($t_key == 1){
                $info['email'] = $t_value;
            }
            elseif($t_key == 2){
                $info['address'] = $t_value;
            }
            elseif($t_key == 3){
                $info['phone'] = $t_value;
            }
            elseif($t_key == 4){
                $info['department'] = $t_value;
            }
            else{
                echo "NO SUCH DATA";
            }
        }
        array_push($result,$info);
    }
    echo "<br><h1>Teacher Details</h1><br>";
    $s_data = json_encode($result,true);
    echo $s_data;
}

$teacher_g_data = array();

$t1 = array("John","john@gmail.com","Ilford","3775469586","Computer Science");
$t2 = array("Andrew","andrew@gmail.com","Hatfield","9693563767","Information Technology");
$t3 = array("Shabnam","shabnam@gmail.com","Manchester","4386783786","Robotics");

array_push($teacher_g_data,$t1);
array_push($teacher_g_data,$t2);
array_push($teacher_g_data,$t3);

teachers($teacher_g_data);
?>