<?php

/**
 * Description of Bootstrap
 *
 * @author kovalus
 */
class Bootstrap {

    public function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

//        print_r($url);
        // default controller
        if (empty($url[0])) {
            require __DIR__ . '/../controllers/' . DEFAULT_CONTROLLER . 'Controller.php';
            $default_cntr = DEFAULT_CONTROLLER . 'Controller';
            $controller = new $default_cntr();
            $controller->loadModel(DEFAULT_CONTROLLER);
            $default_action = DEFAULT_ACTION;
            $controller->$default_action();
            return false;
        }

        $file = __DIR__ . '/../controllers/' . ucfirst($url[0]) . 'Controller.php';
        if (!file_exists($file)) {
            require 'controllers/ErrorController.php';
            $controller = new ErrorController('Controller "' . ucfirst($url[0]) . 'Controller" doesn\'t exists');
            return false;
        }
        require $file;

        $ctrl_name = ucfirst($url[0]) . 'Controller';
        $controller = new $ctrl_name;

        $controller->loadModel($url[0]);


        if (isset($url[2])) {
            if (!method_exists($controller, $url[1])) {
                require __DIR__ . '/../controllers/ErrorController.php';
                $controller = new ErrorController('Controller "' . $url[0] . '", method "' . $url[1] . '" doesn\'t exists');
                return false;
            }
            $controller->{$url[1]}($url[2]);
        } else {
            if (isset($url[1])) {
                if (!method_exists($controller, $url[1])) {
                    require __DIR__ . '/../controllers/ErrorController.php';
                    $controller = new ErrorController('Controller "' . $url[0] . '", method "' . $url[1] . '" doesn\'t exists');
                    return false;
                }
                $controller->{$url[1]}();
            } else {
                $controller->{$url[0]}();
            }
        }
    }

}
