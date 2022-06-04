<?php
// you have to use array() funtion to make array;
//you can store simmilar data type vale in array.
//array index start form 0.
$names=array('robin','tamin','thapa');
echo "<pre>";
print_r($names);

$names[2]="likeshear";

print_r($names);

echo $names[2];
echo "</br>";

//for loop.
// ======================================
echo "array loop";

$arralenght=count($names);//this will count from 1.

// echo $arralenght;
echo "<ol>";
for($i=0;$i<$arralenght;$i++){
    echo "<li>".$names[$i]."</li>";//this is a dinamic content
}
echo"</ol>";

// ===================================
// foreach loop.
// foreach loop only work in array in php
//it calls every element in array.
$studends=array('tanim','robin','rojoni','thapa');

foreach($studends as $e){//$e is the variable.
    echo $e."</br>";
}
// ==================================
// array 
$stu=array('jskfl','jskf',"kjskalfj","kjlskajf",'jksjdf');
rsort($stu);//it will reverse the asanding order.
// sort($stu) it gives you output acurding to asinding oder .

echo "<ol>";
foreach($stu as $names){
    echo "<li>".$names."</li>";
}
echo "</ol>";

//=================
// array push,array pop,
$stur=array('jskfl','jskf',"kjskalfj","kjlskajf",'jksjdf');
array_pop($stur);//it will remove last element.
array_push($stur,"robin");//it will add element in array in last
array_shift($stur);//it will remove element from first
array_unshift($stur,"tanim"); //it will add element in the first of array
echo "<ol>";
foreach($stur as $names){
    echo "<li>".$names."</li>";
}
echo "</ol>";




?>