<?php
$arr=['Januar', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month='September';
$t=array_search($month, $arr);
foreach ($arr as $u) {
	if ($u=$month){
		$month="<b>$month</b>";
	$arr[$t]=$month;
	}
}
	foreach ($arr as $u) {
	echo "$u, ";
}
?> <br>