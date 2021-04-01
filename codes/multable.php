<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <!-- <style>
    .container{
        width:400px;
        min-height:200px;
        margin:30% auto;
    }
    </style> -->
</head>
<body>
    <div class="container">

    <form method="post">
    <div class="input-group">
    <label>Enter number:</label>
    <input type="text" id="num1" name="num1">
    </div><!--/input-group--><br>
    <div class="input-group">
    <label>Enter number:</label>
    <input type="text" id="num2" name="num2">
    </div><!--/input-group--><br>
    </div><br>
    <div class="submit">
    <input type="submit" value="check" name="calculator">
    </div>
    
    
    </form>
    <p>
    <?php
    
    if(isset($_POST['calculator'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $i=1;
       while($num1<=$num2){
           echo "{$num1} * {$i} = {$num1} <br>";
           $num1++;
           $i++;

       }
    }

    ?>
    </p>
    </div><!--/container-->
</body>
</html>