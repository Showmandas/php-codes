<?php
session_start();

if(isset($_SESSION['username'])){
    echo "my name is ".$_SESSION['username']. " and my age is ". $_SESSION['age'];
}else{
    echo "no username is set";
}

?>