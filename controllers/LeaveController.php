<?php

class LeaveController extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->userId = Session::get('id');
        if (empty($this->userId)) {
            header('Location:' . URL_BASE . 'login');
        }
    }

    function leave()
    {

        // TODO: getu User data
        parent::loadModel('user');
        $userData = $this->user->getUser($this->userId);
        $this->view->title = 'Wniosek urlopowy';

        $this->view->leaveType[0] = 'urlop zwykły';
        $this->view->leaveType[1] = 'na żądanie';
        $this->view->leaveType[2] = 'bezpłatny';

        $this->view->render('leave/form', array(), true);
    }

    function save()
    {
        dd($_POST);
    }
}
