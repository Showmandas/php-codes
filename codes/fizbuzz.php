

 
<?php
echo "**FizzBuzz challenge**<br>
#if a number is multiple of 3 then it will be print 'Fizz'<br>
#f a number is multiple of 5 then it will be print 'Buzz'<br>
#if a number is multiple of both 3 and 5 then it will be print 'FizzBuzz'<br><br>";
for($n=1;$n<=100;$n++){
    if(($n%3==0) && ($n%5==0)){
        echo " Fizzbuzz<br>";
    }
    elseif($n%3==0){
        echo " Fizz";
    }
    elseif($n%5==0){
        echo " buzz";
    }
  else{
        echo " ".$n;
    }
    
}
