<?php
include 'conn.php';
$id = $_GET['ID'];
$q=" DELETE FROM `crud` WHERE ID = $id ";
 mysqli_query($con,$q);
header('location:showData.php');
?>