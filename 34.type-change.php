<?php
$a = "32"; // string
echo settype($a, "integer"); // $a is now integer

$b = 32; // integer
echo settype($b, "string"); // $b is now string

$c = true; // boolean
echo settype($c, "integer")

function stringToNumber($str) {
    settype($str, "integer");
   };
   stringToNumber("1234")
?>