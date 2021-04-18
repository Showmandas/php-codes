<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
  
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
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top light-mode">
  <a class="navbar-brand pl-5 text-uppercase" href="#" style="font-family: 'Satisfy', cursive;">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="signup.php">Sign up&nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $_SESSION['username'];?>&nbsp;<i class="fa fa-user-circle" aria-hidden="true"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <li class="nav-item text-light">
      <div class="input-group input-group-sm mt-2">
    <span class="input-text">Dark/Light</span>&nbsp;&nbsp;
  <input type="checkbox" class="my-2" id="selector">
</div>
      </li>
       </ul>
  </div>
</nav>
<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
<div class="leftimg d-flex justify-content-center align-items-center w-100 h-100">
<img src="images/together.png" alt="corona_together" width="300" height="300" class="animated infinite pulse">
</div><!--/leftimg-->
</div><!--/col-lg-5-->
<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
<div class="rightside d-flex justify-content-center align-items-center w-100 h-100">
<h1>Let's fight together against cor<span class="coronaAnimation"><img src="images/corona.png" alt="corona" class="animated infinite rotateIn"></span>na </h1>
</div><!--/rightside-->
</div><!--/col-lg-7-->
</div><!--/row-->
</div><!--/main_header-->

<!--*********Corona-updates*********-->
<section class="corona_update">
    <div class="mb-3">
        <h3 class="text-center text-uppercase">covid-19 live updates of the world</h3>
    </div>
    <div class="table-responsive container-fluid">
    <table class="table table-bordered table-striped text-center" id="tbval">
    <tr>
    <th>Country</th>
    <th>TotalConfirmed</th>
    <th>TotalRecoverd</th>
    <th>TotlaDeaths</th>
    <th>NewConfirmed</th>
    <th>NewRecovered</th>
    <th>NewDeaths</th>
    </tr>
    </table>
    
    </div><!--/table-responsive-->
</section>

<!-----About-Section-->

<div class="container-fluid about pt-5 pb-5" id="aboutid">
    <div class="aboutheader text-center mb-5 mt-4">
        <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5 ">
        <div class="col-lg-5 col-md-6 col-12">
            <img src="images/aboutcorona.jpg" alt="aboutcorona" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
           <h2>What is COVID-19?</h2>
           <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
           <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" target="_blank" style="color:rgba(120,120,120,0.9)">Read more >></a>
        </div>
    </div><!---/row-->
</div><!--/aboutid-->

<!---Corona-symptoms-->
<div class="container-fluid symptoms pt-5 pb-5" id="symptomid">
    <div class="aboutheader text-center mb-5 mt-4">
        <h1>Corona Symptoms</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/cough.png" alt="coughpic" class="img-fluid" width="120" height="110">
                <figcaption>Cough</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/runnynose.png" alt="coughpic" class="img-fluid" width="130" height="120">
                <figcaption>Runny nose</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/fever.png" alt="feverpic" class="img-fluid" width="150" height="120">
                <figcaption>Fever</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/weak.png" alt="weakpic" class="img-fluid" width="120" height="120">
                <figcaption>Weak</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/tired.png" alt="tiredpic" class="img-fluid" width="165" height="120">
                <figcaption>Tiredness</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <figure class="text-center">
                <img src="images/breath.png" alt="coughpic" class="img-fluid" width="120" height="120">
                <figcaption>Breathing difficulties</figcaption>
                </figure>
                
            </div><!--/col-lg-4-->
        </div><!--/row-->
    </div><!--/container-->
</div><!--/symptoms-->
<!---Prevention-->
<div class="container-fluid about pt-5 pb-5" id="preventid">
    <div class="aboutheader text-center mb-5 mt-4">
        <h1>6 steps prevention against coronavirus</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/handwash.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                      wash your hands for 20 sec,with soap and water or handwash. 
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/mask.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                 Cover your mouth and nose when coughing or sneezing.Wear a mask when physical distancing is not possible.
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/home.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                 Maintain at least 1 metre distance between you and people coughing or sneezing.
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/quarentine.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                 Stay home if you feel unwell.
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/news.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                      Informed by watching breaking newses.And follow the recommended practice.  
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row subrow">
                    <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                <img src="images/care.png" alt="coughpic" class="img-fluid" width="100" height="100">
                </figure>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 mt-2">
                 If you have a fever, cough and difficulty breathing, seek medical attention. 
                 </div>
                </div><!--/subrow-->
            </div><!--/col-lg-4-->
        </div><!--/row-->
    </div><!--/container-->
</div><!---/prevention-->
<!--Contact form-->
<div class="container-fluid contact pt-5 pb-5 txtlight" id="contactid">
    <div class="aboutheader text-center mb-5 mt-4">
        <h1>Contact us</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="post">
            <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter full name" autocomplete="off" name="fullname" required>
  </div>
 
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your address" name="address" autocomplete="off" required>
  </div>
 
 
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="enter mobile number"  autocomplete="off" required>
  </div>
 <div class="form-group">
     <label>Select Symptom</label><br>
     <div class="form-check-inline">
  <input class="form-check-input" type="checkbox" value="cold" name="coronasym[]" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Cold
  </label>
</div>
<div class="form-check-inline">
  <input class="form-check-input form-check-inline" type="checkbox" value="fever" name="coronasym[]" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Fever
  </label>
</div>
<div class="form-check-inline">
  <input class="form-check-input form-check-inline" type="checkbox" value="weak" name="coronasym[]" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Weak
  </label>
</div>
<div class="form-check-inline">
  <input class="form-check-input form-check-inline" type="checkbox" value="breath" name="coronasym[]" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">
    Difficulties in breathing
  </label>
</div>
 </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe what are you feeling</label>
    <textarea class="form-control" name="message" rows="3" required></textarea>
  </div>
  <button type="submit" name="submit" id="submitbtn" class="btn btn-primary">Send</button>
</form> 
            </div><!--/col-lg-8-->
        </div><!--/row-->
    </div><!--/container-->
</div><!--/contact-->
<footer class="mt-5">
<div class="footer_style p-3 text-light text-center container-fluid">
<div class="text-center link d-flex justify-content-center align-items-center">

    <a class="nav-link text-light" href="post.php">Ask Question&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i>
</a>
    <a class="nav-link text-light" href="showpost.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Show post</a>
    <a class="nav-link text-light" href="showpost.php"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Privacy Settings</a>
    <a class="nav-link text-light" href="showpost.php">Terms & Condition</a>

      
</div><!--/link-->
<p class="text-white">&copy;Copyright <?php echo date('Y');?>&nbsp;By showman ,&nbsp; All rights reserved </p>
</div><!--/footer_style-->
</footer>
<script>
    
        $('.count').counterUp({
        delay:10,
        time:3000
    })
    
    function fetch(){
      $.get("https://api.covid19api.com/summary",
      function (data){
        var tbval=document.getElementById('tbval');
        for(var i=1;i<(data['Countries'].length);i++){
          var x =tbval.insertRow();
          x.insertCell(0);

          tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
          tbval.rows[i].cells[0].style.background='#7a4a91';
          tbval.rows[i].cells[0].style.color='#fff';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i].cells[1].style.background='#4bb7d8';
          tbval.rows[i].cells[1].style.color='#fff';


          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i].cells[2].style.background='#4bb7d8';

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i].cells[3].style.background='#f36e23';


          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i].cells[4].style.background='#4bb7d8';
          
          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i].cells[5].style.background='#9cc850';
          
          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i].cells[6].style.background='#f36e23';


        }
      }
      )
    }
</script>
<script>
$(document).ready(function(){
  $("#selector").change(function(){
      $("body").toggleClass("bg-dark");
      $(".nav_style").toggleClass("navbar-dark bg-dark");
      $(".input-text").toggleClass("text-white");
      $("h1").toggleClass("text-white");
      $(".footer_style").toggleClass("bg-dark text-white");
      $(".about").toggleClass("bg-dark text-white");
      $("p").toggleClass("text-white");
      $(".contact").toggleClass("text-white");
      $("#symptomid").toggleClass("text-white");
  });
});
</script>
</body>

</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $fullname =$_POST['fullname'];
    $address = $_POST['address'];
    $mobile =  $_POST['mobile'];
    $symps =   $_POST['coronasym'];
    $message = $_POST['message'];

   $check="";
   foreach($symps as $chk){
       $check .= $chk.",";
   }
   $dup="select * from coronacase where mobile='$mobile'";
   $query=mysqli_query($con,$dup);
    if(mysqli_num_rows($query)>0){
        ?>
        <script>
        alert('duplcicate data ');
        </script>
        <?php
    }else{
    
$insertQuery = "insert into coronacase(fullname,address,mobile,symptoms,message) values('$fullname','$address','$mobile','$check','$message')";
   $q=mysqli_query($con,$insertQuery);
   if($q){
    ?>
    <script type="text/javascript">
    alert('your data has saved successfully');
//     $(document).ready(function(){
//         $('#submitbtn').click(function(){
//             Swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   title: 'Your work has been saved',
//   showConfirmButton: false,
//   timer: 1500
// });
//         })
//     })
    
    </script>
    <?php
}else{
    ?>
    <script>
 alert('something wrong');   
    </script>
    <?php
}

    }
   
}
?>