<?php

class IndexController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        // parent::loadModel('location');
        $params = array('title' => 'Wnioski urlopowe');
        $this->view->render('index/welcome', array(), true);
    }
}
