<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>
           table{
               border:1px solid black;
              border-spacing:0;
           }
           td{
               padding: 20px;
               border:1px solid black;
           }
           .bgcolor{
               background-color:black;
           }
       </style>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="cd">
    <input type="submit" name="submit" value="GenerateChessBoard">
    </form>
  <br>

  <table>
      <?php
    if(isset($_POST['submit'])){
        $data=$_POST['cd'];

        for($row=1;$row<=$data;$row++){
            echo "<tr>";
           
            for($col=1;$col<=$data; $col++){
                if(($row+$col)%2==0){
                    echo "<td class='bgcolor'> </td>";

                }else{
                    echo "<td> </td>";

                }
                
            }

            echo "</tr>";
        }
    }

      ?>
  </table>
</body>
</html>