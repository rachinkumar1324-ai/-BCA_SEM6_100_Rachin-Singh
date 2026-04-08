<?php
$dob = "2006-05-04";

$birth = new DateTime($dob);
$today = new DateTime();

$age = $today->diff($birth)->y;

echo "Age = $age years";
?>
