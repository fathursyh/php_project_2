<?php
namespace App\Controllers;
use App\Core\Controller;

class Home extends Controller{
    public function index() {
        $data['header'] = 'Home';
        $data['nama'] = $_SESSION['username'];
        $this->render('template/headers', $data);
        $this->render('home/index');
        $this->render('template/footer');
    }
}