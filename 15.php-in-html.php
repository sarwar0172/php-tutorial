<!-- dinamic content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Enter your fav color <input type="text" name="favColor">
         <input type="submit" name='submit' value="cheak now">

    </form>

    <p>
        
        <?php
         if(isset($_POST['submit'])){
             $favColor=$_POST['favColor'];
             switch($favColor){
                case "blue": echo 'your fav color is blue';
                break;
                case "red": echo 'your fav color is red';
                break;
                case "green": echo 'your fav color is green';
                break;
                default:echo 'sorry i am not sure about your favorite collor';
            
            }
         }
        ?>
    </p>
</body>
</html>

