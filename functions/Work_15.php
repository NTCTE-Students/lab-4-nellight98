<?php
$array=[1, 2, 3, 42, 5, 6, 7];
function secondLargest($array) {
    $uniqueArray = array_unique($array);
    sort($uniqueArray);
    return isset($uniqueArray[count($uniqueArray) - 2]) ? $uniqueArray[count($uniqueArray) - 2] : null;
}
print(secondLargest($array))
?>