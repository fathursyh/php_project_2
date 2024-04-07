<?php

namespace App\Core;

class App
{
    private $nameSpaceController = "App\\Controllers\\";
    protected $controller = "Home";
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        // var_dump($_SESSION);

        LogicController::checkSession('user'); 

        $url = $this->parseURL();

        // CONTROLLER / PAGE
        if (isset($url[0])) {
            if (file_exists('../src/Controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                $_SESSION['lastC'] ??= '/' . $url[0];
                unset($url[0]);
            }
        }
        if (User::getStatus() == Status::LOGOUT) {
            $this->controller = 'login';
        }
        $this->controller = new ($this->nameSpaceController . $this->controller);

        // METHOD
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // PARAMETER
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // RUN CONTROLLER, METHOD, AND PARAMETER
        call_user_func_array([$this->controller, $this->method], $this->params);        
    }

    public static function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
