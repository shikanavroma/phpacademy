<?php
$arr=['sunday', 'monday', 'tuesday','thursday', 'wednesday', 'friday', 'saturday'];
$dayoff1='saturday';
$dayoff2='sunday';
$g=array_search($dayoff1, $arr);
$j=array_search($dayoff2, $arr);
foreach ($arr as $u) {
	if ($u=$dayoff1){
	$arr[$g]="<b>$u</b>";
	}
	if($u=$dayoff2) {
		$arr[$j]="<b>$u</b>";
	}
}
	foreach ($arr as $u) {
	echo "$u, ";
}
?><br>