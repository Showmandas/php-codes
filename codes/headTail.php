<?php

$heads=0;
$tails=0;
for($i=1;$i<=100;$i++){

    $ran = rand(1,2);

    // echo $ran;
    if($ran == 1){
        $heads++;
        // echo(" Heads,I win<br>");
    }elseif($ran == 2){
        $tails++;
        // echo(" Tails,you win<br>");
    }

}

echo "there is {$heads} num of Heads and {$tails} num of Tails<br>";


if($heads > $tails){
    echo "Heads win<br>";
}elseif($heads<$tails){
    echo "Tails win<br>";
}else{
    echo "Draw<br>";
}
?>