
<?php /*
<p>20. Приведите число 20 к типу boolean. Объясните результат.</p>

<p>21. Приведите число 0 к типу boolean. Объясните результат.</p>

<p>22. Приведите число -20 к типу boolean. Объясните результат.</p>*/
if (20==TRUE) {
	echo "20 is true";
}
else {
	echo "20 is falce";
}
?> <br/>
<?php
if (0=='FALCE') {
	echo "0 is falce";
}
?> <br/>
<?php
if (-20=='FALCE') {
	echo "0 is falce";
}
elseif (-20==TRUE) {
	echo "-20 is true";
}