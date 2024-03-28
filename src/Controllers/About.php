<?php
namespace App\Controllers;
use App\Core\Controller;
class About extends Controller{

    public function index() {
        $data['header'] = 'About';
        $this->render('template/headers', $data);
        $this->render('about/index');
        $this->render('template/footer');
    }
    public function page() {
        $this->render('about/page');
    }
}