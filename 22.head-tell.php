<?php
//head tell game for 100 times . if head comes more then tell in this 100 times head will win or tell will win if
//tell come more then heads.
$heads=0;
$tails=0;
for($i=1; $i<=100; $i++){
$ranNum = rand(1,2);//it will gives randow value from 1 to 2

    if($ranNum ==1 ){
        $heads++;
        // echo "heads I win! </br>";
    }else{
        $tails++;
        // echo "tails,|win!you </br>";
    }
}
echo "there were {$heads} heads and {$tails} tails";
if($heads>$tails){
    echo "heads, i win </br>";
}elseif($heads<$tails){
    echo "tails, YOu win! </br>";
}else{
    echo "draw </br>";
}

?>