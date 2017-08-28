<form action="calculator.php" method="post">
<input type="text" name="a" placeholder="перший операнд"/>
<input type="text" name="b" placeholder="другий операнд"/>
<input type="radio" name="operator" value="/"/>Поділити
<input type="radio" name="operator" value="-"/>Відняти
<input type="radio" name="operator" value="*"/>Помножити
<input type="radio" name="operator" value="+"/>Додати
<input type="radio" name="operator" value="%"/>Остача від ділення </br></br>
<input type="submit" value="Get result"/>
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$operator=$_POST['operator'];
if ($operator=='/' && $b!=0) {
    print "Your result is " . ($a/$b) .".";
} elseif ($operator=='+') {
    print "Your result is " . ($a+$b) .".";
} elseif ($operator=='-'){
    print "Your result is " . ($a-$b) .".";
}elseif ($operator=='*'){
	 print "Your result is " . ($a*$b) .".";
}elseif ($operator=='%'){
	 print "Your result is " . ($a%$b) .".";
} else {
	print "We cannot divide $a by 0";
}
?>

	