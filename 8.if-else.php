<?php
$day="monday";
if($day=="sunday"){
 echo 'today is holiday';
}else {
    echo "today is $day";
};

echo "</br>";
$num=66;
if($num%2==0){
 echo 'multiplse of 2';
}else{
 echo 'not a multiplse of 2';
}
echo "</br>";

//if multiple condition is true the fist condition will be output.
if($num % 2==0){
    echo "multiples od 2";
}elseif($num%3==0) {
     echo "multiples of 3";
}elseif ($num %4==0) {
   echo "multiples of 4";
}else{
    echo "God knows";
}
?>