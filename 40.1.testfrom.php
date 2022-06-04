<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


echo $_GET['fname'];
echo $_GET['age'];
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo htmlentities($_SERVER['PHP_SELF'])

?>