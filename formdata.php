<?php
$result = mail("slovarik@test.ru","�������� ���������","��������� �� ������������ $_POST[name]. \n��� ����������� ����� $_POST[mail]. \n��� $_POST[rad]. ����� �������� ������������ $_POST[months]. \n������������ ������������ �������� �����: $_POST[email] $_POST[viber] $_POST[sms] $_POST[watsup]. \n$_POST[name] ������� ��������� ���������: \n$_POST[mytext]");
if ($result)
{
	echo "��������� ���� ����������";
}
else
{
	echo "��������� �� ����������. ���������� ��� ���";
}		

?>