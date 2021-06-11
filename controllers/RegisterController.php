<?php

class RegisterController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function register()
    {
        $this->view->title = 'Rejestracja';
        $this->view->render('register/form', array(), true);
    }

    function save()
    {
        $this->register->saveUser($_POST);
        header('Location:' . URL_BASE . 'login/login');
    }
}
