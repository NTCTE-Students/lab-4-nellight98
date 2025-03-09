<?php
$date="2025-03-05";
function formatDate($date) {
    $dateArray = explode("-", $date);
    return "{$dateArray[2]}/{$dateArray[1]}/{$dateArray[0]}";
}
print(formatDate($date));
?>