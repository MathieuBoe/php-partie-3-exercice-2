<?php 
$number1 = 0;
$number2 = 5;
$multiplication = $number1 * $number2;
$title = 'Exercice2';

include 'header.php';
// do {
//     echo ' '.$number1 * $number2;
//     $number1 ++;
// }
// while ($number1 <= 20);
while ($number1 <= 20){
    echo ' '.$number1*$number2;
    $number1 ++;
}

include 'footer.php';?>