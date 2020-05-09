<?php
$result = mail("slovarik@test.ru","Тестовое сообщение","Сообщение от пользователя $_POST[name]. \nЕго электронная почта $_POST[mail]. \nЭто $_POST[rad]. Месяц рождения пользователя $_POST[months]. \nПользователь предпочитает общаться через: $_POST[email] $_POST[viber] $_POST[sms] $_POST[watsup]. \n$_POST[name] прислал следующее сообщение: \n$_POST[mytext]");
if ($result)
{
	echo "Сообщение было отправлено";
}
else
{
	echo "Сообщение не отправлено. Попробуйте ещё раз";
}		

?>