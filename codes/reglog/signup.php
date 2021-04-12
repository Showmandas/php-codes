<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
include 'dbconn.php';

if(isset($_POST['signup'])){
    $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $pwd= mysqli_real_escape_string($conn,$_POST['pwd']);
    $cpwd= mysqli_real_escape_string($conn,$_POST['cpwd']);

    $pass=password_hash($pwd,PASSWORD_BCRYPT);
    $cpass=password_hash($cpwd,PASSWORD_BCRYPT);

    $emailQuery=" select * from signtable where email='$email'";
    $query=mysqli_query($conn,$emailQuery);
    $emailCnt=mysqli_num_rows($query);
    if($emailCnt>0){
        ?>
        <script>
       alert('email already exist');
       </script>
      
       <?php
   
    }else{
        if($pwd===$cpwd){
          $insertQuery=" insert into signtable(fullname,email,password,cpassword) values('$fullname','$email','$pass','$cpass')";
          $inq=mysqli_query($conn,$insertQuery);
          if($inq){
            ?>
            <script>
            alert('inserted succesfully');
            </script>
            <?php
        }else{
            ?>
             <script>
            alert('something wrong');
            </script>
           
            <?php
        }
        
        }else{
            ?>
            <script>
           alert('password does not match');
           </script>
          
           <?php
       
        }
    }
}
?>
<div class="container m-auto">

<div class="row py-5">
<div class="col-lg-6 img">
<img src="images/sign.jpg" alt="selfie image">
</div><!--/img-->
<div class="col-lg-6 form">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
  <div class="form-group">
    <label for="fullname">Full Name:</label>
    <input type="text" class="form-control" placeholder="Enter fullname" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email">
  </div>
  
  <div class="form-group">
    <label for="pwd">New Password:</label>
    <input type="password" class="form-control" placeholder="Enter new password" id="pwd" name="pwd">
  </div>
  
  <div class="form-group">
    <label for="cpwd">Repeat Password:</label>
    <input type="password" class="form-control" placeholder="Repeat password" id="cpwd" name="cpwd">
  </div>
  
  <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
</form>
</div><!--/form-->

</div><!--/row-->

</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>