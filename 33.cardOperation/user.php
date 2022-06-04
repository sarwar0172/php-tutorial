<?php
include 'connect.php';// you have to inport this to access the database.

if(isset($_POST['submit'])){//if user submit this pice of code will excicute
  
//name ,email ,mobile is the name of html input feild.
  $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

//interting values in the server. sometimes server has updated. cheak in server to get the code of inserting value it might me change
    $sql="insert into `cardfrom` (name ,email,mobile)
    values('$name','$email','$mobile')";//name ,email,mobile are the feid name in server. $name,$email,$mobile are created variable.

    $result=mysqli_query($con,$sql);//it will insert $sql into your server and exicuite

    if($result){//if $sql inserted properly and server has no problem to exicuite that code result will be true.
     header("location:display.php");//it will take you to display page.
    }else{
      die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
<div class="container">
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    palceholder="engter your name" name="name"><!--  do not forget to input names -->  
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    palceholder="engter your Email" name="email"><!--  do not forget to input names -->
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    palceholder="engter your mobile number" name="mobile"><!--  do not forget to input names -->
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
</html>
