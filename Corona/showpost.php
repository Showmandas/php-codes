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
        <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="post.php">Ask Q/A</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container mt-5">
<div class="row">
<div class="col-lg-8 col-12 offset-lg-2">

<?php
include 'dbcon.php';

$selquery="select * from post";
$q=mysqli_query($con,$selquery);
while($res=mysqli_fetch_array($q)){

   
  ?>
  
      <div class="jumbotron">
      <?php echo $res['post'] ?>
      <div class="icons d-flex justify-content-end align-items-center">
      
      <i class="fa fa-thumbs-up" aria-hidden="true"></i>&nbsp;
      <i class="fa fa-heart" aria-hidden="true"></i>&nbsp;
      <i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;
      <!--  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editpost">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

</button>

<!-- Modal -->
<div class="modal fade" id="editpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
<div class="row">
<div class="col-lg-8 col-12 offset-lg-2">
<div class="jumbotron">
<form method="post">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Create Post Here</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="write something" name="posttxt"></textarea>
  </div>
  <div class="form-group d-flex justify-content-around align-items-center">
  <button type="submit" name="post" id="postbtn" class="btn btn-primary  text-center">Post</button>
  <button type="submit" name="undo" id="postbtn" class="btn btn-info  text-center"><i class="fa fa-undo" aria-hidden="true">&nbsp;</i>Undo post</button>
  </div>
  <p id="showmsg" style="display:none;font-weight:bold;"></p>
</form>
</div><!--/jumbotron-->
</div><!--/col-12-->

</div><!--/row-->



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      </div><!--/icons-->
      
      </div><!--/jumbotron-->
      <?php
      }
      ?>

</div><!--/col-12-->

</div><!--/row-->

</div><!--/container-->
<footer class="mt-5">
<div class="footer_style p-3 text-light text-center container-fluid">
<div class="text-center link d-flex justify-content-center align-items-center">

    <a class="nav-link text-light" href="post.php">Ask Question&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i>
</a>
    <a class="nav-link text-light" href="showpost.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Show post</a>
    <a class="nav-link text-light" href="showpost.php"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Privacy Settings</a>
    <a class="nav-link text-light" href="showpost.php">Terms & Condition</a>

      
</div><!--/link-->
<p class="text-dark">&copy;Copyright <?php echo date('Y');?>&nbsp;By showman ,&nbsp; All rights reserved </p>
</div><!--/footer_style-->
</footer>
</body>
</html>

<?php

if(isset($_POST['done'])){
    $id=$_GET['id'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
     $q = " UPDATE `crudtable` SET id=$id,username='$username',password='$password' WHERE id=$id ";
   $query = mysqli_query($con,$q);
   header('location:display.php');
}
?>
