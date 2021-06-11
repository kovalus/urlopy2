<?php

class ErrorController extends Controller
{

    function __construct($message = '')
    {
        parent::__construct();
        $message = 'This is an error!<br>' . $message . '<br>';
        $this->view->title = 'Error page';
        $this->view->msg = $message;
        echo $message;

        //$this->view->render('error/index');
    }
}
