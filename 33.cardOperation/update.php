<?php
include 'connect.php';

$id=$_GET['updateId'];//it gives you value from url.
$sqli="select * from `cardfrom` where id=$id";//selecting what type of information you want to get.
$result=mysqli_query($con,$sqli);//insert sqli code to your server and excicute.
$row=mysqli_fetch_assoc($result);//getting information form the server acurding to secection. it will give you a array of information.

$name1=$row['name'];
$email1=$row['email'];
$mobile1=$row['mobile'];

if(isset($_POST['submit'])){//this if condtion will excicuite when user click on update
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];


    $sql="update `cardfrom` set id=$id,name='$name',email='$email',mobile='$mobile' where id=$id";//updating value 

    $result=mysqli_query($con,$sql);//submit sql code into your server

    if($result){
     header("location:display.php");
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
    palceholder="engter your name" name="name" value=<?php echo $name1;?>>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    palceholder="engter your Email" name="email" value=<?php echo $email1;?>>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    palceholder="engter your mobile number" name="mobile" value=<?php echo $mobile1;?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>
