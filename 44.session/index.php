<!-- A session is a way to strore information to be used across multiple pages -->
<!-- unlike a cokie ,the information is not stroe on the users computer -->
<?php
session_start();
$_SESSION['username']='roibin islam';//'username' is key and 'robin islam' in value
$_SESSION['age']=26;

echo "robin"

?>