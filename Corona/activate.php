<?php

echo "How are you?";
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $updatequery=" update signup set status='active' where token='$token' ";
    $query=mysqli_query($con,$updatequery);
    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account updated succesfully";
            header('location:login.php')
        }else{
            $_SESSION['msg']="you are logged out.";
            header('location:login.php')
        }
    }else{
        $_SESSION['msg']="Account updated failed";
            header('location:signup.php')
    }
}

?>