<?php
namespace App\Controllers;
use App\Core\Controller;

class Home extends Controller{
    public function index() {
        $data['header'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->render('template/headers', $data);
        $this->render('home/index');
        $this->render('template/footer');
    }
}