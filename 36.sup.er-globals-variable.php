<?php
//superglobals are build in variables that are always availabel in all scopes


//some super global variable. you cannot write them in small letter.
// $GLOBALS
// $_SERVER
// $_COOKIE
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_SESSION


$a=10;
$b=20;
function display(){
    echo $GLOBALS['a']. "<br/>";
    echo $GLOBALS['b'];
}

display()

?>