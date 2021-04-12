<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona</title>
    <?php include 'links/links.php';?>
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top">
  <a class="navbar-brand pl-5 text-uppercase" href="#" style="font-family: 'Satisfy', cursive;">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">symptoms</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact us</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Ask Q/A</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container mt-5">
<?php
include 'dbcon.php';
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  $email_search="select * from signup where email='$email'";
  $q=mysqli_query($con,$email_search);
  $email_cnt=mysqli_num_rows($q);
  if($email_cnt){
      $email_pass=mysqli_fetch_assoc($q);
      $db_pass=$email_pass['password'];
      $_SESSION['username']=$email_pass['username'];
      $pass_dec=password_verify($password,$db_pass);
      if($pass_dec){
          ?>
          <script>
          alert('login successful');
          alert('Welcome');
          location.replace("index.php");
          </script>
          <?php
          
      }else{
          ?>
          <script>
          alert('password incorrect');
          </script>
          
          <?php
      }
  }else{
      ?>
          <script>
          alert('Invalid Email');
          </script>
      
      <?php
  }
}
?>
<div class="row">
<div class="col-lg-8 col-12 offset-lg-2">
<div class="jumbotron">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
</i>
</span>
  </div>
  <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email" required>
</div> 
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i>

</span>
  </div>
  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
</div> 
  <button type="submit" class="btn btn-primary" name="login">Log in</button>
</form>
<div class="log mt-4">
<p> Don't you have an account?<a href="signup.php">Sign up here</a></p>
</div><!--/log-->
</div><!--/jumbotron-->
</div><!--/col-12-->

</div><!--/row-->

</div><!--/container-->
<footer class="mt-5">
<div class="footer_style p-3 text-light text-center container-fluid">
<div class="text-center link d-flex justify-content-center align-items-center">

    <a class="nav-link text-light" href="post.php">Ask Question&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i>
</a>
    <a class="nav-link text-light" href="showpost.php">Show post</a>
    <a class="nav-link text-light" href="showpost.php">Privacy Settings</a>
    <a class="nav-link text-light" href="showpost.php">Terms & Condition</a>

      
</div><!--/link-->
<p class="text-dark">&copy;Copyright <?php echo date('Y');?>&nbsp;By showman</p>
</div><!--/footer_style-->
</footer>

</body>
</html>

<?php
include 'dbcon.php';

?>