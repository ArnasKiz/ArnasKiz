<?php

$number = 900;

if ($number % 3 == 0){ //IF number is divisible by 3
    echo 'Fizz'; //Echo prints out Fizz
}
else if ($number % 5 == 0) { //ELSE IF number is divisible by 5
    echo 'Buzz'; //Echo prints out Buzz
}
else if ($number % 15 == 0) { //Else If number is divisible by 15
    echo 'FizzBuzz'; //Echo prints out FizzBuzz
}
else { echo $number; //Else it prints out the number
}
?>