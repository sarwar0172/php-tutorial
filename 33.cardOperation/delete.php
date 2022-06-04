<?php
//deleting feild form database

include 'connect.php';

if(isset($_GET['del'])){//if get method get value form url. this if condition will activate.
    $id=$_GET['del'];

    $sql="DELETE FROM `cardfrom` WHERE id=$id";//deleting  row which has id=url id.
    $result=mysqli_query($con,$sql);//pusing $sql code to sever to excicuite

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>