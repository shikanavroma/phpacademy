<?php /*<p>5. �������� ����������� if, ������� ������� �����: "��� ��� �������� � ��������" ��� �������, ��� �������� ���������� age �������� � �������� ����� �� 18 �� 59 (������������).</p>

<p>6. ��������� ����������� if �� �.5, ������ �����: "��� ���� �� ������" ��� �������, ��� �������� ���������� age ������ 59.</p>

<p>7. ��������� ����������� if �� �.5-6, ������ �����: "��� ��� ���� ��������" ��� �������, ��� �������� ���������� age �������� � �������� ����� �� 0 �� 17 (������������).</p>

<p>8. ��������� ����������� if �� �.5-7, ������ �����: "����������� �������" ��� �������, ��� �������� ���������� age �������� ������������� ������, ��� ����� ������ �� ��������.</p>*/
if ($age>=17 && $age<=59 ) {
    echo "��� ��� �������� � ��������";
} elseif ($age > 59) {
    echo "��� ���� �� ������";
} elseif ($age>=0 && $age<17){
    echo "��� ��� ���� ��������";
}else {
	 echo "unknown age";
}
?>