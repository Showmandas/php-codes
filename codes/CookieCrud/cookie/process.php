<?php

if(isset($_POST['submits'])){
    $username=$_POST['username'];
    $age=$_POST['age'];
    $degree=$_POST['degree'];

    setcookie('username',$username,time()+86400);
    setcookie('age',$age,time()+86400);
    setcookie('degree',$degree,time()+86400);

    header('location:display.php');
}

?>
