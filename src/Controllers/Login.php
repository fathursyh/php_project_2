<?php
namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Core\Status;
use App\Core\User;

class Login extends Controller {

    public function index() {
        $this->render('login/index');
    }

    public function verify() {
       if ($this->model('User_model')->login($_POST)) {
           User::setStatus(Status::LOGIN);
           var_dump(App::$state);
        //    header('Location:' . DIREKTORI . '');
            // exit();
       } else {
        echo 'Login failed';
       }
    }
}