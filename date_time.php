<?php

//M will print string of the current month
//m will print numeric of the current month
//y will print last 2 digits of the current year
//Y will print 4 digits of the current year
//d will print numeric value of the current day
//D will print string value of the current day
//l will print full day name in string of the current day

//date(formate,timestamp)
echo date("Y/m/d").'</br>';

echo date("Y.m.d").'</br>';

echo date("Y-m-d").'</br>';


echo date("M-l-Y").'</br>';

echo date("M-d-Y").'</br>';

echo date("d-M-Y").'</br>';

echo "Today is " . date("l").'</br>'; // l to get full day name in string

echo "2007 - ". date("Y").'</br>';


//---------------- Time ------------------//


/*
H - 24-hrs format (00 - 23)
h - 12-hrs format (01 - 12)
i - Minutes (00 - 59)
s - Seconds (00 - 59)
a - Lowercase Ante Meridiem and post Meridiem (am / pm)

*/


echo date_default_timezone_get() . "</br>";

echo date_default_timezone_set("Europe/London"). "</br>";
//echo date_default_timezone_set("America/New_York"). "</br>";

echo date_default_timezone_get() . "</br>";
echo "Current time is " . date("h:i:sa"). "</br>";;


//mktime()

//mktime(hour, minute, second, month, day, year);

$c_date = mktime(13,34,47,04,13,2021);
echo "custom date is ". date("Y-m-d H:i:sa",$c_date). "</br>";

//strtotime(time, now)

$str_date =  strtotime("08:45am May 17 2020");

echo "String date : " . date("Y-m-d h:i:sa",$str_date)."</br>";


//------------

$start_date = strtotime("Thursday");
$end_date = strtotime("+4 weeks",$start_date);

echo date("Y-m-d h:i:sa", $end_date)."<br>";

while ($start_date < $end_date){

    echo date("M d" , $start_date)."<br>";

    $start_date = strtotime("+1 week", $start_date);

}




?>