<?php
namespace App\Controllers;
use App\Core\Controller;

class Login extends Controller {

    public function index() {
        $this->render('login/index');
    }

    public function verify() {
        var_dump($_POST);
    }
}