<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'dataentry');

if($con){
    echo "database connected";
}else{
    echo "not connected";
}
?>