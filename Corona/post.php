
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
        <a class="nav-link" href="#contactid">Ask Q/A</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container mt-5">
<div class="row">
<div class="col-lg-8 col-12 offset-lg-2">
<div class="jumbotron">
<form method="post">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Create Post Here</label>
    <textarea class="form-control" id="postinp" rows="7" placeholder="write something" name="posttxt"></textarea>
  </div>
  <div class="form-group d-flex justify-content-around align-items-center">
  <button type="submit" name="post" id="postbtn" class="btn btn-primary px-5 text-center">Post</button>
  <button type="submit" name="post" id="postbtn" class="btn btn-secondary px-4 text-center" onclick="document.getElementById('postinp').value=''";>Clear Post</button>
  <button type="submit" name="undo" id="postbtn" class="btn btn-info px-4 text-center"><i class="fa fa-undo" aria-hidden="true">&nbsp;</i>Undo post</button>
  </div>
  <p id="showmsg" style="display:none;font-weight:bold;"></p>
</form>
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
if(empty($_POST['posttxt'])){
    ?>
    <script>
    document.getElementById('showmsg').innerHTML="you have to ask/write something!";
    document.getElementById('showmsg').style.display= 'block';
    document.getElementById('showmsg').style.color= 'orange';
    </script>
    <?php
}else if(isset($_POST['post'])){
 $posttxt=$_POST['posttxt'];
 $insertpost="insert into post(post) values('$posttxt')";
 $query=mysqli_query($con,$insertpost);
 if($query){
    ?>
    <script>
    // document.getElementById('showmsg').innerHTML="posted successfully!pls check out your post in our post section";
    // document.getElementById('showmsg').style.display= 'block';
    // document.getElementById('showmsg').style.color= 'green';
    alert('posted successfully');
    window.location = 'index.php';
    </script>
    
    <?php
    // header("location:index.php");
}else{
    ?>
    <script>
 document.getElementById('showmsg').innerHTML="something went wrong!";
 document.getElementById('showmsg').style.display= 'block';
 document.getElementById('showmsg').style.color= 'red';
    </script>
    <?php
}

}
?>