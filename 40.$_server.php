<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        name:<input type="text" name="fname"><br><br>
        Age:<input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php

    //by using $SERVER['PHP_SELF'] you can from output in the same page.
   if(isset($_POST['save'])){
  echo $_POST['fname'] . "<br>";
  echo $_POST['age'] . "<br>";

}

?>
</body>
</html>