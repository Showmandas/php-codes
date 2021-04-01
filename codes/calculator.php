<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <style>
    .container{
        width:400px;
        min-height:500px;
        margin:30% auto;
    }
    </style>
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
    </div><br>
    <div class="input-group">
    <select name="operation" id="opt">
    <option value="add">Add</option>
    <option value="sub">Sub</option>
    <option value="mul">mul</option>
    <option value="div">div</option>
    </select>
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
        $opt=$_POST['operation'];
        switch($opt){
            case "add":$sum=$num1+$num2;
            echo "the addition is: <br>".$sum;
            break;
            case "sub":$sub=$num1-$num2;
            echo "the subtraction is: <br>".$sub;
            break;
            case "mul":$mul=$num1*$num2;
            echo "the multiplication is: <br>".$mul;
            break;
            case "div":$div=$num1/$num2;
            echo "the division is: <br>".$div;
            break;
        
        }
    }

    ?>
    </p>
    </div><!--/container-->
</body>
</html>