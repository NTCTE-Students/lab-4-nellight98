<?php
$number = 5;
function factorial($number) {
    if ($number === 0) {
        return 1;
      }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
    }
print(factorial(5));

?>