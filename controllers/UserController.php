<?php

class UserController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function user()
    {
        $userId = Session::get('id');
        if (empty($userId)) {
            header('Location:' . URL_BASE . 'login');
        }
        // TODO: getu User data
        $userData = $this->user->getUser($userId);
        $this->view->title = 'Panel użytkownika';
        $this->view->userData = $userData;
        $this->view->render('user/panel', array(), true);
    }
}
