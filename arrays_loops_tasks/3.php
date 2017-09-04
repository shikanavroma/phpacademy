<?php
$b=array(26,17,136,12,79,15);
$massiv=[];
$sum=0;
foreach($b as $k=>$n) {
	$res=$n*$n;
	$massiv[$k]=$res;
}
foreach ($massiv as $res){
	$sum+=$res;
}
echo $sum;
?><br>;