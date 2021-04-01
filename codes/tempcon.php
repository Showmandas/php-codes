<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature conversion</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        width:100vw;
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .form{
        width:40vw;
        padding:8%;
        height:40vh;
        background:rgba(120,20,120,0.9);
        text-align:center;
        
    }
    form{
        padding:12px;
        font-size:15pt;
        
    }
    input[type="text"]{
        width:45%;
        padding:7px 10px;
        outline:none;
        border:none;
        font-size:12pt;
    }
    input:hover{
        border:1px solid #ddd;

    }
    #submitbtn{
        width:100px;
        padding:7px 10px;
         text-align:center;
        background:rgba(20,150,40,0.9);
        border:none;
        outline:none;
        color:#fff;
        font-size:12pt;
    }
    #submitbtn:hover{
        background:rgba(20,50,40,0.9);
    }
    #tempsel{
        padding:7px 10px;
        font-size:12pt;
    }
    p{
        width:180px;
        min-height:auto;
        background:rgba(20,20,120,0.9);
        text-align:center;
        color:#fff;
        margin-left:20%;
        line-height:35px;
    }
    </style>
</head>
<body>




<div class="container">
<div class="form">
    <form method="POST">
    <input type="text" name="inptemp" placeholder="Enter temperature">
    <select name="tempsel" id="tempsel">
    <option value="F">F</option>
    <option value="C">C</option>
    </select>
  <input type="submit" value="check" name="check" id="submitbtn">
    </form>
    
<p>
<?php

if(isset($_POST['check'])){
    $data=$_POST['inptemp'];
    $temp=$_POST['tempsel'];
    if($temp == "C"){
        $r=$data * 9 / 5 +32;
        echo "Farenheit value: ".$r;
    }else{
        $r=$data - 32 * 5/9;
        echo "Celcious value: ".$r;
        
    }

}

?>

</p>

    </div><!--/form-->.
</div><!--/container-->
    
</body>
</html>