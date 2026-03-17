<?php
$number = 7;

$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }   }
}
if ($isPrime) {
    echo "$number is a Prime Number";
} else {
    echo "$number is Not a Prime Number";
}
?>
