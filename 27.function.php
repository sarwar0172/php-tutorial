<?php
function sayMyname(){
    echo "my name is robin </br>";
    $sum=5+2;
    echo "the sum of two number".$sum;
};

sayMyname();
 echo"</br>";

function sum($a,$b){//this are parameter $a and $b 
   
    $sum=$a+$b;

    echo $sum;
}

sum(5,6);
echo"</br>";

function um($a,$b=5){//this are parameter $a and $b . 5 is a default  for b
   
   $multresu=$a*$b;
   echo $multresu."</br>";


 
}

um(5,6);
um(50,6);
um(51);
echo"</br>";


function mum($a,$b=5){
   
    $multresu=$a*$b;
   
  return $multresu;
 
  
 }
$output=mum(10,4);
$utput=mum(1,4);

echo "the multipicaton of thw number".$output;
echo"</br>";

echo "the multipicaton of thw number".$utput;

?>