<?php
$to="sarwarhossain017244@gmail.com";//you can use multipal email if you want to send to multiple email.
$subject="Test mail";
$massage="hello! this is a simple email massage";
$from="tanimiqbal653@gmail.com";
$headers="From: tanimiqbal653@gmail.com";

if(mail($to,$subject,$massage,$headers)){
    echo "mail sent";
};

?>