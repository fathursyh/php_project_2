<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Flasher;

use const App\Config\JURUSAN;

class Mahasiswa extends Controller {

    public function index() {
        $data['header'] = 'Daftar Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser('fathur@gmail.com');
        $path = BASEPATH . '/php_project_2/assets/files/mahasiswa.csv';
        $data['form'] = JURUSAN;
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaFromDb();
        $this->render('template/headers', $data);
        $this->render('mahasiswa/index', $data);
        $this->render('template/footer');
    }
    
    public function detail($npm) {
        $data['header'] = 'Detail Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser('fathur@gmail.com');
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaNpm($npm);
        $this->render('template/headers', $data);
        $this->render('mahasiswa/detail', $data);
        $this->render('template/footer');
    }

    public function tambah() {
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('behasil', 'ditambahkan', 'success');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        }
    }

    public function hapus($npm) {
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($npm) > 0){
            Flasher::setFlash('behasil', 'dihapus', 'success');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        }
    }

    public function getEdit() {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaNpm($_POST['id']));
    }

    public function edit() {
        if($this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0){
            Flasher::setFlash('behasil', 'diubah', 'success');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . DIREKTORI . '/mahasiswa');
            exit;
        }
    }
}