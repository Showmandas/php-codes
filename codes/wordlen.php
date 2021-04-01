
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="inp">
Enter data:
<input type="text" name="inpdata">
<button name="length">Find length</button>
</div>
<p>

<?php

if(isset($_POST['length'])){
    $data=$_POST['inpdata'];
    $r=strlen($data);
   echo $r;
}

$name="Showman das is an idiot person";

echo str_ireplace('an idiot','a clever',$name);
// echo str_ireplace('an','a',$name);

?>
 </p>    
</body>
</html>