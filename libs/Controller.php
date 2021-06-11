<?php


class Controller
{

    protected $model = null;

    public function __construct()
    {
        //        echo 'Parent controller<br>';
        $this->view = new View();
    }

    public function loadModel($name)
    {
        $path = __DIR__ . '/../models/' . ucfirst($name) . 'Model.php';

        if (file_exists($path)) {
            require $path;

            $model_name = ucfirst($name) . 'Model';
            $this->model = new $model_name();

            $name = strtolower($name);
            $this->$name = new $model_name();
        }
    }
}
