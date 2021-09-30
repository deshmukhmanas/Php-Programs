<?php

//read file function

//$file =  fopen("nisarg_info.txt", "a") or die("Unable to open file! please change permission");

//echo readfile("nisarg_info.txt");
//echo fread($file,filesize("nisarg_info.txt"));
//echo fwrite($file,"of solent university");




$file =  fopen("myinfo.json", "r") or die("Unable to open file! please change permission");

//echo readfile("myinfo.json");
$test_json =  fread($file,filesize("myinfo.json"));

//$test_array = json_decode($test_json,true);

echo '<pre>'.print_r($test_json,true).'</pre>';
//echo fwrite($file,"of solent university");


fclose($file);
//fclose($file);




?>