<?php
namespace App\Controllers;
use App\Core\Controller;

class Mahasiswa extends Controller {

    public function index() {
        $data['header'] = 'Daftar Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->render('template/headers', $data);
        $this->render('mahasiswa/index');
        $this->render('template/footer');
    }
}