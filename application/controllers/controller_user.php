<?php
class Controller_user extends Controller {

    function __construct()
    {
        $this->model = new User_Model();
        $this->view = new View();
    }

    function action_index()
    {

        session_start();
        $this->view->generate('auth_form_view.php', 'template_view.php');
    }
    function action_auth_form()
    {   session_start();
        $this->view->generate('auth_form_view.php', 'template_view.php');
    }
    function action_quit()
    {
        session_start();
        $this->model->user_quit();
        $this->view->generate('auth_form_view.php', 'template_view.php');
    }


    function action_auth()
    {
        session_start();
        $data=$this->model->user_auth($_POST);
         $this->view->generate('auth_form_view.php', 'template_view.php', $data);
    }

    function action_registration()
    {
        session_start();
        $this->model->user_create($_POST);
        $this->model->user_add();
        $this->view->generate('auth_form_view.php', 'template_view.php');
    }

    function action_reg_form()
    {
        session_start();
        $this->view->generate('reg_form_view.php', 'template_view.php');
    }


}