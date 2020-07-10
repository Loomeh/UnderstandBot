<?php

$m1 ="Understand!";
$m2 ="Understand, Understand!";
$m3 ="Understand, Understand, Understand!";
$m4 ="Understand, Understand, Understand, Understand!";
$m5 ="Understand, Understand, Understand, Understand, Understand!";
$m6 ="Understand, Understand, Understand, Understand, Understand, Understand!";
$m7 ="Understand, Understand, Understand, Understand, Understand, Understand the concept of love!";
$m8 ="Understand, Understand, Understand, Understand, Understand, Understand the concept of love! Uh!";
$rm=array($m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys];
?>