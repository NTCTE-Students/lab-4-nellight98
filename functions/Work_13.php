<?php
$array = [1, 2, 3, 4, 5, 6];
function average($array) {
    return array_sum($array) / count($array);
}
print(average($array))
?>