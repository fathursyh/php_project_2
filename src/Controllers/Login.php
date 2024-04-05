<?php
namespace App\Controllers;
use App\Core\Controller;

class Login extends Controller {

    public function index() {
        $this->render('login/index');
    }

    public function verify() {
       if ($this->model('User_model')->login($_POST)) {
        header('Location:' . DIREKTORI . '/Home');
        exit();
       } else {
        echo 'Login failed';
       }
       
    }
}