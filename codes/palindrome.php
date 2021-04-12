<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrom0e</title>
</head>
<body>
    <div class="wrap">
    <div class="center_div">
    <p id="showdata"></p>
    <form action="" method="post">
    <textarea name="inpdata" id="inpdata" cols="30" rows="5"></textarea><br>
    <input type="submit" name="submit" id="submit">
    </form>

    </div><!--/center_div-->
    </div><!---/wrap-->
</body>
</html>
<?php

if(isset($_POST['inpdata'])){
    $inpdata=$_POST['inpdata'];
    $inprev=strrev($inpdata);
    if($inprev===$inpdata){
        ?>
        <script>
        document.getElementById('showdata').innerHTML="It's a palindrome number";
        // alert("It's a palindrome number");
        </script>
        
        <?php
        
    }else{
        ?>
           <script>
        document.getElementById('showdata').innerHTML="It's not a palindrome number";
        // alert("It's a palindrome number");
        </script>
     
        <?php
     
    }
}

?>