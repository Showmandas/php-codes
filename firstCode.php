<?php
echo "Hello world";
echo '<br>';
$fname = "soumen";
$lname = "das";
echo "My Name is $fname" . " " .$lname;
define("name","shantu");
echo "<br>";
echo name;
function showName($n){
    return $n;
}
echo '<br>';
echo showName('santu');
?>