<?php
class conn {
private static $host = 'localhost'; // адрес сервера
private static $database = 'medcine'; // имя базы данных
private static $user = 'root'; // имя пользователя
private static $password = ''; // пароль
private static $port ='3308';
    public static function conn_get_data(){
        return array(self::$host,self::$database,self::$user,self::$password,self::$port);
    }
}