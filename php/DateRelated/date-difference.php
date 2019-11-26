<?php

$dob_date = '1987-03-22';
$currentDateTs = strtotime(date('Y-m-d'));
$dobTs = strtotime($dob_date);
$datediff = $currentDateTs - $dobTs;
$daysDiff = round($datediff / (60 * 60 * 24));
echo "Days: $daysDiff";


?>