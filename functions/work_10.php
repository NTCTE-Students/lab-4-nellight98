<?php

$array=[1, 1, 2, 5, 4 ,3, 2, 6];
function removeDuplicates($array) {
    return array_unique($array);
}

print_r(removeDuplicates($array));

?>

