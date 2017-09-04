<?php
$arr=[1,2,3,4,5,6,7,8,9];
foreach ($arr as $s){
	if ($s>=1 && $s<=3) {
		echo "$s, ";
	} 
}echo "<br>";
	foreach ($arr as $s){
	if ($s>=4 && $s<=6) {
		echo "$s, ";
} 
	}echo "<br>";
foreach ($arr as $s){
	if ($s>=7 && $s<=9) {
		echo "$s, ";
}
}
?> <br>