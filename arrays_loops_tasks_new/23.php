<?php
$a=(string)$_POST['number']; 
$c=str_split($a);
$v=array_sum($c);
echo $v;
?>