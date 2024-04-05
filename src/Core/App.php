<?php
namespace App\Core;

class App
{
    protected $nameSpaceController = "App\\Controllers\\";
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public $status = false;
    public function __construct() {

        if (!isset($_COOKIE['user']) && !$this->status) {
            $this->controller = 'Login';
        }
        $url = $this->parseURL();

        // CONTROLLER
        if (isset($url[0])) {
            if (file_exists('../src/Controllers/' . $url[0] . '.php')) {
                if(!$this->status) {
                    $this->controller = 'Login';
                    unset($url[0]);
                } else {
                    $this->controller = $url[0];
                    unset($url[0]);
                }
            }
        }

        $this->controller = new ($this->nameSpaceController . $this->controller);

        // METHOD
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // PARAMS
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // RUN CONTROLLER, METHOD, AND PARAMS
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}


