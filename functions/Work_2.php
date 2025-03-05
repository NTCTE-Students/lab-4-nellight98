<?php

$polydrome = 'level'; 

function polydromeCheck($string) {
    $check1 = $string;
    $check2 = strrev($string);

    if ($check1 == $check2) {
        print("{$string} - является полидромом");
    } else {
        print("{$string} - не является полидромом");
    }
}

polydromeCheck($polydrome);