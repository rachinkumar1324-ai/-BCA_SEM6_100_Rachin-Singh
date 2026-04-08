<?php
$year = 2004;

if(($year%4==0 && $year%100!=0) || $year%400==0)
echo "Leap Year";
else
echo "Not Leap Year";
?>
