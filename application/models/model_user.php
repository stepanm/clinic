<?php
class User_Model extends Model
{
    private $user_name;
    private $user_surname;
    private $user_email;
    private $user_pass;
    function user_create($reg_data)
    {
        //read attributes
        $this->user_name=$reg_data['user_name'];
        $this->user_surname=$reg_data['user_surname'];
        $this->user_email=$reg_data['user_email'];
        $this->user_pass=$reg_data['user_pass'];
    }
    function user_add_to_db()
    {
        //open connection
        require_once getcwd().'\application\core\connection.php';
        $link = mysqli_connect($host, $user, $password, $database,$port)
        or die("Ошибка " . mysqli_error($link));

        // выполняем операции с базой данных
        $query = "INSERT INTO users(user_name,user_Surname,user_email,user_pass) VALUES('$this->user_name','$this->user_surname','$this->user_email','$this->user_pass')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            echo "Выполнение запроса прошло успешно";
        }
        // закрываем подключение
        mysqli_close($link);
    }
    function user_check_in_db($auth_data)
    {
        $this->user_email=$auth_data['user_email'];
        $this->user_pass=$auth_data['user_pass'];
        //open connection
        require_once getcwd().'\application\core\connection.php';
        $link = mysqli_connect($host, $user, $password, $database,$port)
        or die("Ошибка " . mysqli_error($link));

        // выполняем операции с базой данных
        $query = "SELECT * FROM users WHERE user_email='$this->user_email' and user_pass='$this->user_pass'";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result)
        {
            echo "Выполнение запроса прошло успешно";
        }
        // закрываем подключение
        mysqli_close($link);
        return $result->num_rows;
    }
    function user_drop_from_db()
    {
        //open connection
        //create query and start
        //close connection
    }
}