<?php
$arr=array('green'=>'зеленый', 'red'=>'красный', 'blue'=>'синий');
$en=[];
$ru=[];
foreach ($arr as $f=>$g) {
	array_push($en, $f);
	array_push($ru, $g);
}
print_r ($en);
print_r ($ru);
?> <br>
<?php
$arr=array('green'=>'зеленый', 'red'=>'красный', 'blue'=>'синий');
foreach ($arr as $f=>$g) {
	$eng[]=$f;
	$rus[]=$g;
}
print_r ($eng);
print_r ($rus);
?> <br>