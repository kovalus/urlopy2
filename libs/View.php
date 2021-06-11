<?php


class View
{

    public $title = '';
    public $msg = '';

    public function __construct()
    {
        //        echo 'Parent View <br>';
    }

    public function render($name, $params, $withHeader = true)
    {

        if ($withHeader === true) {
            require "views/header.php";
            require "views/$name.php";
            require "views/footer.php";
        } else {
            require "views/$name.php";
        }
    }
}
