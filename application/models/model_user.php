<?php
class User_Model extends Model
{
    private $user_name;
    private $user_surname;
    private $user_email;
    private $user_pass;
    private $user_id;
    function user_create($reg_data)
    {
        //read attributes
        $this->user_name=$reg_data['user_name'];
        $this->user_surname=$reg_data['user_surname'];
        $this->user_email=$reg_data['user_email'];
        $this->user_pass=$reg_data['user_pass'];
    }
    function user_query($query)
    {
        require_once 'C:\ProgramData\wamp64\www\mvc\application\core\connection.php';
        $conn=conn::conn_get_data();
        //open connection

        $link = mysqli_connect($conn[0],$conn[2],$conn[3],$conn[1],$conn[4])
       // $link = mysqli_connect('localhost','medcine','root','','3308')
        or die("Ошибка " . mysqli_error($link));
        // выполняем операции с базой данных
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        /*if($result)
        {
            echo "Выполнение запроса прошло успешно";
        }
        else {
            echo "Запрос не выполнен";
        }*/
        // закрываем подключение
        mysqli_close($link);
        return $result;
    }

    function user_add()
    {
        $query = "INSERT INTO users(user_name,user_Surname,user_email,user_pass) VALUES('$this->user_name','$this->user_surname',
    '$this->user_email','$this->user_pass')";
        $this->user_query($query);
    }
    function user_auth($data)
    {
        $data['user_name']=null;
        $data['user_surname']=null;
        $this->user_create($data);
        $query = "SELECT max(user_id) as max_user_id,count(distinct user_id) as count_user_id FROM users WHERE user_email='$this->user_email' and user_pass='$this->user_pass'";

        if ($result = $this->user_query($query)) {
            /* выборка данных и помещение их в массив */
            if($row = $result->fetch_assoc()){
                if($row['count_user_id']==1) {
                    //user найден и он единственный. авторизация пройдена
                    //session_start();
                    $_SESSION['user_id']=$row['max_user_id'];
                    //echo '<br>Авторизован '.$row['max_user_id'].'<br>';
                    return $row['max_user_id'];
                }
                else {
                    //fail
                    echo 'С таким логином и паролем несколько пользователей. Всего запсией '.$row['count_user_id'].'<br>';
                }
            }

            /* очищаем результирующий набор */
            $result->close();
        }
    }
    function user_drop()
    {
        $query = "delete FROM `users` WHERE user_id=$this->user_email";
        return $this->user_query($query);
    }
    function user_quit(){
        unset($_SESSION);
        session_destroy();
    }
}