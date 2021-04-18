<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container">
<div class="row d-flex justify-content-center">
<div class="col-lg-11 col-12">
<div class="table-responsive">
<table class="table table-striped table-bordered bg-info">
<thead>
<tr>
<th class="py-3 text-white">id</th>
<th class="py-3 text-white">Fullname</th>
<th class="py-3 text-white">Email</th>
<th class="py-3 text-white">Permanent Address</th>
<th class="py-3 text-white">Present Address</th>
<th class="py-3 text-white">Gender</th>
<th class="py-3 text-white">Blood Group</th>
<th class="py-3 text-white">Pic</th>

</tr>
</thead>

<tbody>

<?php
include 'dbconn.php';

$selquery='select * from imgup';
$query=mysqli_query($conn,$selquery);
// $result=mysqli_fetch_array($query);
while($result=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td> <?php echo $result['id'];?> </td>
        <td> <?php echo $result['fullname'];?> </td>
        <td> <?php echo $result['email'];?> </td>
        <td> <?php echo $result['peradd'];?> </td>
        <td> <?php echo $result['preadd'];?> </td>
        <td> <?php echo $result['gender'];?> </td>
        <td> <?php echo $result['bldgrp'];?> </td>
        <td><img src="<?php echo $result['pic'];?> " width="100" height="50"></td>
    </tr>
    <?php
}
?>

</tbody>


</table>
</div><!--/table-responsive-->

</div><!--/col-12-->

</div><!--/row-->
</div><!--/container-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>        
</body>
</html>