<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard Generator</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
     }
     
     .container{
        width:100vw;
         height:100vh;
         display:flex;
         justify-content:center;
         align-items:center;
         /* margin-top:10%; */
         /* min-height:auto; */
         background:#2aa2a2;
         /* padding:20px 20px; */
     }
     .formdiv{
         width:50vw;
         height:50vh;
         text-align:center;
     }
     #inputdata{
         padding:10px;
         outline:none;
     }
     #btn{
         padding:10px;
         background:#a233dd;
         outline:none;
         border:none;
         color:#eee;
         font-size:1rem;
     }
     #btn:hover{
         cursor:pointer;
         background:#a2a2a2;
     }
     table{
         /* border:1px solid #000; */
         margin-top:3%;
         display:flex;
         justify-content:center;
         align-items:center;
     }
     td{
        border:1px solid #000;
        padding:15px;
     }
     .bgcolor{
         background:#000;
     }
     .bgcolor_2{
         background:#fff;
     }
    </style>
</head>
<body>
    <div class="container">
    <div class="formdiv">
    <h2 style="text-align:center;font-size:2rem;">Generate Chess board</h2><br>
    <form action="" method="post">
    <input type="text" name="inp" id="inputdata" placeholder="Enter number" autocomplete="off">
    <input type="submit" name="submit" value="Generate" id="btn">
    </form>
    <table>
    <?php
    if(isset($_POST['submit'])){
        $inp=$_POST["inp"];
        for($row=1;$row<=$inp;$row++){
            echo "<tr>";
            for($col=1;$col<=$inp;$col++){
                if(($row + $col)%2==0){
                    echo "<td class='bgcolor'></td>";
                }else{
                  echo "<td class='bgcolor_2'></td>";
                }
            }
            echo "</tr>";
          }
          
    }
    
    ?>
    </table>
    </div><!--/formdiv-->
    
    </div><!--/container-->
</body>
</html>