<?php
include 'conn.php';
if(isset($_POST['done'])){
    $id=$_GET['id'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
     $q = " UPDATE `crudtable` SET id=$id,username='$username',password='$password' WHERE id=$id ";
   $query = mysqli_query($con,$q);
   header('location:display.php');
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
      <h1 class="text-white text-center">Update Operation</h1>
      </div><br>
      <label>Username: </label>
      <input type="text" name="username" class="form-control"><br>
      <label>Password: </label>
      <input type="password" name="password" class="form-control"><br>
      <button class="btn btn-success" type="submit" name="done">Submit</button>
      </div>
    </form>
    </div>

    
</body>
</html>