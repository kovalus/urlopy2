<?php

class LogoutController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function logout()
    {
        Session::destroy();
        header('Location:' . URL_BASE . 'login');
    }

    function message()
    {
        echo 'wylogowanie powiodło się';
    }
}
