<?php

$corls=array('red','blue','yellow');

print_r($corls);
$res=implode('+',$corls);//it converts a array into a string.
echo "my fav color are ".$res."</br>";

$biodata="my name is robin islam";
 
$es=explode(" ",$biodata);//it converts a sting into array word by word. because delevator is space. if delevetar is , like (" ,",$biodata) array will bulid , by ,
echo"<pre>";
print_r($es);
foreach($es as $val){
    echo $val."</br>";
}





?>