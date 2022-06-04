<?php
$a=10;
$b=10;
$c=50;

if($a==$b or $a==$c){//use can use || insted of or and 
    echo "true";
}else{
    echo "false";
};
echo "</br>";
if($a==$b and $a==$c){//use can use && insted of  and 
    echo "true";
}else{
    echo "false";
};
echo "</br>";
if($a==$b XOR $a==$c){// if any condition is ture return will be true
    echo "true";
}else{
    echo "false";
};
?>