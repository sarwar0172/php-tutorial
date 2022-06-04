<!-- temperature conversion from culcious to faranhite -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- this is css for html -->
    <style>
        *{margin:0;padding:0; box-sizing:boder-box}
        h1{text-align:center; line-height:20vh;}
        .main-div{
            width:100%;
            height:80vh;
            display:flex;
            justify-content:space-around;
            align-items:center;
        }
        .left-side {

        }
        .left-side img{
                 max-width:400px;
                 height:auto;
        }
    </style>
</head>
<body>
    <header>
    <h1>temperature conversion</h1>
        <div class="main-div">
    
        <div class="left-side">
        <img src="https://images.unsplash.com/photo-1520209759809-a9bcb6cb3241?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">

    </div>
            <div class="right-side">
            <form action="" method='POST'>
                <input type="text" name="num" placeholder="enter your number">
                <div class="selection">
                    <label>Celc</label>
                    <input type="radio" name="units" value="cel">
                    <label>Faran</label>
                    <input type="radio" name="units" value="feh">
                </div>
                <input type="submit" name="submit" value="Convert Now">
            </form>
      
            </div>
           <p>
               <!-- caltuation of interchanging values -->
               <?php
                if(isset($_POST['submit'])){
                    $num=$_POST['num'];
                    $tem=$_POST['units'];

                    if($tem =="cel"){
                        $result=$num*9/5+32;//it converts into faranthite.
                        echo "the conversion value is" .$result;
                    }else{
                        $result=($num-32)*5/9;//it converts into celcious
                        echo "the conversion value is ".$result;

                    };
                }
               ?>
           </p>

           
        </div>
        </div>
        </div>
    </header>
</body>
</html>