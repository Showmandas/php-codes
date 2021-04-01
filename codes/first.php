<?php
echo "hello world</br>";
echo "welcome in php world</br>";

$name="shanu";
echo "Hi.. My name is $name</br>";

//modulus
$num=35;
$num1=4;

$mod=$num % $num1;

echo "Remainder: $mod<br>";


//powerOfNumber

$num=4;
$base=2;

$pow=pow($num,$base);
echo "Power: $pow<br>";

//Single and double quotes
 
$nam="sanu";
 echo 'my name is $nam<br>';//using single quote
 echo "my name is {$nam}</br></br>";//using doule quote

 //task1

 $age = 26;

 if($age<5){
     echo "Baby";
 }
 elseif($age>5 && $age<12){
     echo "child";
 }
 elseif($age>12 && $age<20){
     echo "teenager";
 }
 elseif($age>=20 && $age<40){
     echo "adult";
 }else{
     echo "elderly person";
 }

$age=35;

switch($age){

    case $age>5:echo "<br>greater than 34<br>";
    break;
    default: echo "nothing<br>";
    break;

}

//concatenate

$name="sanu";
$age=23;

echo 'my name is'.$name.'. i am '.$age.' years old.<br>';

$a="allu";
$a .=" arjun";
echo " $a";

//ternary operator

$a=5;
$r= ($a==5)?'true':'false';
echo "<br>$r<br>";

//increament-decreament
$a=3;
echo 'pre-increament '.++$a.'<br>';
echo $a.'<br>';
echo 'post-increament '.$a++.'<br>';
echo $a.'<br>';

$a=7;
echo 'pre-decreament '.--$a.'<br>';
echo $a.'<br>';
echo 'post-decreament '.$a--.'<br>';
echo $a.'<br>';
//While/Do-While

echo "print 1 to 5 number<br>";
$k=1;
// while($k<=5){
//     echo $k."<br>";
//     $k++;
// }

// echo "using do-while loop<br>";
// do{
//     echo $k."<br>";
//     $k++;

// }while($k<=5);


//Task-2:list all the multiples of 12

$m=12;
$n=1;

// while($m<=240){
//     echo "12 * {$n} = {$m}<br>";
//     $m+=12;
//     $n++;

// }

// do{
//     echo "12 * {$n} = {$m}<br>";
//     $m+=12;
//     $n++;
// }while($m<=240);


    for($n=1;$n<=$m;$n++){
        echo "{$m} * {$n} = ".$m * $n."<br>";
    }
//random number

$randomNumber= rand(0,100);
echo "random number is :<br>".$randomNumber*2;
echo "<br>";
//fizzbuz challege

//for loop
$names=array("anu","sanu","panu","manu");
echo "<ol>";
$alen=count($names);
for($i=0;$i<$alen;$i++){
    echo "<li>".$names[$i]."</li>";
}
echo "</ol>";

//foreach loop
$students=array('labu','rim','sanu','anushka');
sort($students);
rsort($students);
echo "<ol>";
foreach($students as $val){
    echo "<li>".$val."</li><br>";
}
echo "</ol>";

//array operation

$arrayval=array('cat','dog','fish');
print_r($arrayval);
echo "<br>pop operation :".array_pop($arrayval)."<br>";//pop
print_r($arrayval);
echo "<br>push :".array_push($arrayval,"fish")."<br>";//push
print_r($arrayval);
echo "<br>shift :".array_shift($arrayval)."<br>";//shift
print_r($arrayval);
echo "<br>unshift :".array_unshift($arrayval,"flesh")."<br>";//unshift
print_r($arrayval);
echo "<br>";
//implode & explode

$colors=array('blue','green','red','yellow','black');
print_r($colors);
$col= implode(",",$colors);
echo "<br>my fav color is :".$col."<br>";
echo "<br>";
//explode
$info="my age is 23 years";

$expl=explode(",",$info);
foreach($expl as $value){
    echo $value;
}

echo "<br>";
//merge two arrays n remove duplicates
$arr1=array('green','red','blue','black');
$arr2=array('yellow','red','blue','pink');

$mergeArr = array_merge($arr1,$arr2);//merge arrays
echo "<br>";
print_r($mergeArr);
echo "<br>";
$remdup=array_unique($mergeArr);
print_r($remdup);

if(isset($_POST['colorshow'])){

    $color=$_POST['favcolor'];
    switch($color){
        case 'red':echo "<h3>my fav color is {$color}</h3>";
        break;
        case 'green':echo "<h3>my fav color is {$color}</h3>";
        break;
        case 'blue':echo "<h3>my fav color is {$color}</h3>";
        break;
        default:echo "<h3>sorry! I m not sure about your fav color</h3>";
        break;
    }

}


?>
<!-- without closing tag php file will be executed.but when it's embed with html we have to use closing tag -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Document</title>
</head>
<body>
    <div class="codes">
    <form method="post">
    <label>Enter your fav color:</label>
    <input type="text" id="color" name="favcolor">
    <input type="submit" value="check" name="colorshow">
    </form>
    
    </div>
</body>
</html>