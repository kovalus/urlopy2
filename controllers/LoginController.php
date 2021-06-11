<?php

class LoginController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function login()
    {
        $userId =  Session::get('id');
        if (!empty($userId)) {
            header('Location:' . URL_BASE . 'user');
        }
        $this->view->title = 'Logowanie';
        $this->view->render('login/form', array(), true);
    }

    function makelogin()
    {
        // parent::loadModel('register');
        dd($_POST);
        //die('fff');
        $id = $this->login->loginUser($_POST);
        dd($id);
        header('Location:' . URL_BASE . 'user');
    }

    function logout()
    {
        Session::destroy();
        header('Location:' . URL_BASE . 'register');
    }
}
