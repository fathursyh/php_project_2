<?php
namespace App\Controllers;
use App\Core\Controller;
class Mahasiswa extends Controller {

    public function index() {
        $data['header'] = 'Daftar Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser();
        $path = BASEPATH . '/php_project_2/assets/files/mahasiswa.csv';
        $data['mhs'] = $this->model('Mahasiswa_model')->getData($path);
        $this->render('template/headers', $data);
        $this->render('mahasiswa/index', $data);
        $this->render('template/footer');
    }
}