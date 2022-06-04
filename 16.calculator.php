<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'><!--without using post method you cannot get input value -->
    <div><input type="text" placeholder="Enter Number" name="num1"></div>
    <div>
        <input type="text" placeholder="Enter number" name="num2">
    </div>

     <div>
         <select name="operation" >
             <option value="add">ADD</option>
             <option value="sub">Sub</option>
             <option value="mult">Mult</option>
             <option value="Div">Div</option>

         </select>
     </div>

     <div>
         <input type="submit" value='submit' name="submit">
     </div>
     </form>

     <p>
         <?php
         if(isset($_POST['submit'])){
             $num1=$_POST['num1'];
             $num2=$_POST['num2'];
            // echo "{$num1} {$num2}";
            $operation = $_POST['operation'];

            switch($operation){
                case "add": $sum=$num1 + $num2;
                 echo "the addition of two number {$sum}";
              break;
                case "sub":$sub=$num1 - $num2;
                echo "this is the substraction of number {$sub}";

                break;
                case "mult":$multi=$num1 * $num2;
                echo "this is the multiplication of number {$multi}";
               break;
                case "Div":$div=$num1 / $num2;
                echo "this is the division of number {$div}";

                default: echo 'sorry';
            };
         };
         ?>
     </p>
</body>
</html>