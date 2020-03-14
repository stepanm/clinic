<?php
class Controller_user extends Controller {

    function __construct()
    {
        $this->model = new User_Model();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('reg_view.php', 'template_view.php');
    }
    function action_registration()
    {
        $this->model->user_create($_POST);
        $this->model->user_add_to_db();
        $this->view->generate('auth_view.php', 'template_view.php');
    }
    function action_auth()
    {
        $data=$this->model->user_check_in_db($_POST);
        //echo $data;
        $this->view->generate('cool_view.php', 'template_view.php',$data);
    }

}