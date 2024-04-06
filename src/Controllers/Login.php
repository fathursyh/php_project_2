<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Status;

class Login extends Controller {

    public function index() {
        $this->render('login/index');
    }

    public function verify() {
        $_SESSION['failedUser'] = [
            'email' => $_POST['email'],
            'password'=> $_POST['password'],
        ];
       if ($this->model('User_model')->login($_POST)) {
           $_SESSION['user'] = Status::LOGIN;
           if($_SESSION['lastC'] == '/login') {
            $_SESSION['lastC'] = '/home';
           }
           header('Location:'. DIREKTORI . $_SESSION['lastC']);
           exit();
        } else {
            $_SESSION['failed'] = true;
            header('Location:'. DIREKTORI . '/login');
            exit();
        }
    }
    
}