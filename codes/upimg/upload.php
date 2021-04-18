 <?php
 
 include 'dbconn.php';

 if(isset($_POST['submit'])){
     
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $peraddr=$_POST['peraddr'];
    $preaddr=$_POST['preaddr'];
    $gender=$_POST['gender'];
    $bldgrp=$_POST['bldgrp'];
    $file=$_FILES['picup'];

    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];

    $file_ext=explode('.',$filename);
    $file_ext_check=strtolower(end($file_ext));
    $valid_file_ext=array('png','jpg','jpeg');
    

    if($fileerror == 0){
        if(in_array($file_ext_check,$valid_file_ext)){
        $desfile='images/'.$filename;
        move_uploaded_file($filepath,$desfile);

        $insertquery="insert into imgup(fullname,email,peradd,preadd,gender,bldgrp,pic) values('$fullname','$email','$preaddr','$peraddr','$gender','$bldgrp','$desfile')";
        $q=mysqli_query($conn,$insertquery);
        if($q){
            ?>
            <script>
            alert('inserted successfully');
            location.replace('index.php');
            </script>
            <?php
            }else{
                 ?>
                 <script>
            alert('somethhing went wrong');
            </script>
             <?php   
            }
    }else{
        ?>
        <script>
        alert('invalid image extension');
        location.replace("index.php");
        </script>
        <?php
    }
}
 }
 
 ?>