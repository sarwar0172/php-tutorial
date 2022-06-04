<?php
$servername="localhost";
$username="root";
$password="";
$dbname="googlemap";

$con=new mysqli($servername,$username,$password,$dbname);

if($con){
    ?>
<script>alert("Connected successfully")</script>
    <?php
}

?>