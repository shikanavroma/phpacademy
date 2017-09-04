<?php
$r;
$q=2;
$arr=[];
for ($r=1;$r<=10; $r++) {
	$res=$q*$r;
	$arr[$r]=$res;
}
foreach ($arr as $r=>$res) {
	echo "2x$r=$res<br>";
}
?><br>
<?php
$a=3;
$b=1;
$massiv=[];
while ($b>=1 && $b<=10) {
	$res=$a*$b;
	$massiv[$b]=$res;
	$b++;
}
foreach ($massiv as $b=>$res) {
	echo "3x$b=$res<br>";
}
?><br>