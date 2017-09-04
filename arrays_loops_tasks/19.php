<?php
$arr=['sunday', 'monday', 'tuesday','thursday', 'wednesday', 'friday', 'saturday'];
$day='sunday';
$t=array_search($day, $arr);
foreach ($arr as $u) {
	if ($u=$day){
		$day="<i>$day</i>";
	$arr[$t]=$day;
	}
}
	foreach ($arr as $u) {
	echo "$u, ";
}
?> <br>