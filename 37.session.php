<?php
//what is session?
//use to manage informatino across differecnce pages

//verify the user login info
session_start();
echo "Welcome".$_SESSION['username'];//this is predefined.
echo "<br>YOur facorite category is".$_SESSION['favcal'];//value is predefind

echo "<br>";

?>