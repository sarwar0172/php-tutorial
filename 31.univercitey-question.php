<?php
//there are two array. you have to get union of them. it means you have to make a new array which contains every value of those 
//two arrays but value will not be reapeted.
function arrayUnion($arr1,$arr2){
    $merge=array_merge($arr1,$arr2);
    echo "<pre>";
    print_r($merge);
    $res=array_unique($merge);
    print_r($res);

   
}


$arr1=array('red','yellow','blue');
$arr2=array('green','red','blue','black');





arrayUnion($arr1,$arr2);


?>