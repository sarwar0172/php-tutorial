<?php
session_start();

?>


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
    
<?php include "dabcon.php";


if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
  $email_search="SELECT * FROM `regestration2` WHERE email='$email'";
  $query=mysqli_query($con,$email_search);

 $email_count=mysqli_num_rows($query);
 
 if($email_count){
    $email_pass=mysqli_fetch_assoc($query);
    $db_pass=$email_pass['password'];
      
 $_SESSION['firstname']=$email_pass['first name'];


       $pd=password_verify( $password,$db_pass);
       if($pd){
         echo "login successful";
         ?>
 <script> location.replace("home.php")</script>
        <?php
       }else{
         echo "password incorrect";
       }
 }else{
   echo "invalid email";
 }
}

?>



<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
  </div>
</form>
</body>
</html>