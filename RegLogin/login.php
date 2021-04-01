<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
<div class="row">
<div class="col-lg-6  py-5 px-5">
<h4>Log in Form</h4>
    <form action="validation.php" method="POST">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username" id="uname" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Log in</button>
</form>
    </div>
    <div class="col-lg-6  py-5 px-5">
<h4>Sign in Form</h4>
    <form action="registration.php" method="POST">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" placeholder="Enter username" id="uname" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    </div>

</div>
</body>
</html>