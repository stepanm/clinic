
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>

</head>
<body>
<?php
/*
if (isset($_SESSION)){
    session_start();
    //echo 'Добрый день! user_id '.$_SESSION['user_id'].'<br>';
}
*/
if (isset($_SESSION['user_id'])){
    //session_start();
    echo 'Добрый день! user_id '.$_SESSION['user_id'].'<br>';
}
else {
    echo 'Вы не вошли!<br>';

}

?>
<a href="/mvc/main">Главная</a>
<a href="/mvc/user/reg_form">Регистрация</a>
<a href="/mvc/user/auth_form">Авторизация</a>
<a href="/mvc/user/quit">Выйти</a><br>
	<?php include 'application/views/'.$content_view; ?>
</body>
</html>