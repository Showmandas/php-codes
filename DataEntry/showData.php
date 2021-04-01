
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <div class="container">
    <div class="col-lg-12"><br><br>
    <h1 class="text-center text-warning">Display Data</h1><br>
    
    <form method="post" class="d-flex flex-row align-items-stretch">
    <div class="input-group w-50 mr-auto">
      <input type="text" name="get_id" class="form-control w-50" placeholder="Enter ID" name="search">
          <button type="button" class="btn btn-outline-warning btn-sm" name="search">Search</button>
    </div>
    <div class="addData py-2">
      <a href="insert.php" class="btn btn-success">Add Your Info</a>
    </div>
   
  </form>
    
</div>
    <table class="table table-striped table-hover table-bordered my-4" id="tabData">
    <tr class="bg-dark text-white text-center">
    <th>ID</th>
    <th>FullName</th>
    <th>Email</th>
    <th>District</th>
    <th>Gender</th>
    <th>Blood Group</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>
   <?php
   include 'conn.php';
   $squery = " SELECT * FROM `crud` ";
   $query = mysqli_query($con,$squery);
   while($r=mysqli_fetch_array($query)){
   ?>
   <tr class="text-center">
   <td><?php echo $r['ID'] ?></td>
   <td><?php echo $r['Fullname'] ?></td>
   <td><?php echo $r['Email'] ?></td>
   <td><?php echo $r['District'] ?></td>
   <td><?php echo $r['Gender'] ?></td>
   <td><?php echo $r['Blood_group'] ?></td>
   <td><button class="btn btn-danger"><a class="text-white" href="delete.php?ID=<?php echo $r['ID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></a></button></td>
   <td><button type="button" class="btn btn-primary"><a class="text-white"  href="update.php?ID=<?php echo $r['ID']; ?>"><i class="fa fa-edit"></i></a></button></td>
   </tr>
   <?php
   }
   ?>
    </table>
    </div>
    </div>
    
    <!-- Js code for search filter -->
    <!-- <script type="text/javascript" src="filter.js"></script> -->
</body>
</html>