<?php
session_start();
if(!isset($_SESSION['firstname'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
             <div class="logo">
                 <a href="" target="_blank">Robin Techinical</a>
             </div>
             <div class="menu">
                 <ul>
                     <li><a href="" class="active">home</a></li>
                     <li><a href="" >gallery</a></li>
                     <li><a href="" >services</a></li>
                     <li><a href="" >portfolio</a></li>
                     <li><a href="" >about</a></li>

                 </ul>
             </div>
             <div class="contact_btn">
               <a href="logout.php">logOut</a>
             </div>
        </nav>


        <div class="center_content">
            <h1>Hellow this is <?php echo $_SESSION['firstname'] ?></h1>
            <h2>Teacher/Full stack developer</h2>
        </div>
    </header>
</body>
</html>