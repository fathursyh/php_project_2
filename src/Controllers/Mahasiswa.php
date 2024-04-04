<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Core\Flasher;
class Mahasiswa extends Controller {

    public function index() {
        $data['header'] = 'Daftar Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser();
        $path = BASEPATH . '/php_project_2/assets/files/mahasiswa.csv';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaFromDb();
        $this->render('template/headers', $data);
        $this->render('mahasiswa/index', $data);
        $this->render('template/footer');
    }
    
    public function detail($npm) {
        $data['header'] = 'Detail Mahasiswa';
        $data['nama'] = $this->model('User_model')->getUser();
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
}