<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "links.php" ?>
</head>
<body>
  
<?php
include "dabcon.php";
if(isset($_POST['submit'])){
  // mysqli_real_escape_string for extra squerity for sql injection.
$firstName= mysqli_real_escape_string($con,$_POST['fname']);
$lastName=mysqli_real_escape_string($con, $_POST['lname']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);  
$email=mysqli_real_escape_string($con,$_POST['email']);  
$password=mysqli_real_escape_string($con,$_POST['password']);  
$confromPassword=mysqli_real_escape_string($con, $_POST['Cpassword']); 

$pass=password_hash($password,PASSWORD_BCRYPT);//making password unreadable.
$cpassword=password_hash($confromPassword,PASSWORD_BCRYPT);//making password unreadable

$emailquery="select * from regestration2 where email='$email'";
$query=mysqli_query($con,$emailquery);

$emailcount=mysqli_num_rows($query);

if($emailcount>0){
  echo "email already exsist";
}else{
   
        
   if($password===$confromPassword){
    $insertquery="INSERT INTO `regestration2`(`first name`, `last name`, `mobile`, `email`, `password`, `confrom password`) VALUES ('$firstName','$lastName','$mobile','$email','$pass','$cpassword')";

    $iquery=mysqli_query($con,$insertquery);
   }else{
     echo "password not matching";
   }
}
}
?>





<form method="POST">
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fist Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1">
  </div> <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Pssword</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">confrom Pssword</label>
    <input type="password" name="Cpassword" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>