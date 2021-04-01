<?php
include 'conn.php';
if(isset($_POST['done'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $district = $_POST['district'];
    $gender = $_POST['gender'];
    $bldgrp = $_POST['bldgrp'];

    $q=" INSERT INTO `crud` (`Fullname`, `Email`, `District`, `Gender`, `Blood_Group`) VALUES ('$fullname','$email','$district','$gender','$bldgrp') ";
   $query = mysqli_query($con,$q);
   header('location:showData.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
    <form action="" method="post"></br></br>
      <div class="card">
      <div class="card-header bg-dark">
      <h1 class="text-white text-center">Insert Your Data Here</h1>
      </div><br>
      <label>FullName: </label>
      <input type="text" name="fullname" class="form-control"><br>
      <label>Email: </label>
      <input type="text" name="email" class="form-control"><br>
      <label>District: </label>
      <input type="text" name="district" class="form-control"><br>
      <label>Gender: </label>
      <input type="text" name="gender" class="form-control"><br>
      <label>Blood Group: </label>
      <input type="text" name="bldgrp" class="form-control"><br>
      <button class="btn btn-success" type="submit" name="done">Submit</button>
      </div>
    </form>
    </div>

    
</body>
</html>