<?php

?>
<form action="http://localhost/mvc/user/auth" method="post">
    <p><strong>Введите данные авторизации</strong></p>
    <p><input name='user_email' type="text" maxlength="25" size="40" value="Email"></p>
    <p><input name='user_pass' type="text" maxlength="25" size="40" value="Password"></p>
    <button type="submit" name="submit" value="Авторизации">Авторизация</button>
</form>
