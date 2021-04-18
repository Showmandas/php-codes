<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container register mt-5">
<h1>College Form</h1>
<a href="display.php" class="btn btn-info px-5 mt-4 w-25 d-flex justify-content-center align-items-center">Check form</a>
<div class="row mt-5 d-flex justify-content-center">
<div class="col-md-12 col-12 col-lg-5 inpform">

<div class="container">
<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter fullname" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Email ID" id="email" name="email">
  </div>
  
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Permanent Address" id="peraddr" name="peraddr">
  </div>
  
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Present Address" id="preaddr" name="preaddr">
  </div>
  
  <div class="form-group">
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender">Female
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender">Male
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" disabled>Other
  </label>
</div>
  </div>
  <div class="form-group">
  <label for="sel1">Select Blood Group:</label>
  <select class="form-control" id="bldgrp" name="bldgrp">
    <option>A+(ive)</option>
    <option>A-(ive)</option>
    <option>B+(ive)</option>
    <option>B-(ive)</option>
    <option>AB+(ive)</option>
    <option>AB-(ive)</option>
    <option>O+(ive)</option>
    <option>O-(ive)</option>
  </select>
</div>
<div class="form-group">
<label>Upload your pic(it's have to be formal)</label>
<input type="file" class="form-control-file" name="picup">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div><!--/container-->
</div><!--/inpform-->
</div><!--/row-->

</div><!--/register-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
</html>