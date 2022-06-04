<?php
echo date('d');//this tis date. you have give diffent parameter for different information of data. 
//you can gate time,day,am,pm and lots of thing. you can find them in google.

echo date("h:i:sA");//it will give you current time.
echo"</br>";

$timezone=date_default_timezone_get();//getting timezone.
echo 'current sever to,ezpme is:'.$timezone;
echo"</br>";

date_default_timezone_set('Asia/Dhaka');//setting timezone
echo date("h:i:sA");//it will give you current time in your timezone
?>