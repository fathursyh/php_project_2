<?php 
namespace App\Models;

use App\Core\Database;

class Mahasiswa_model {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMahasiswaFromDb() {
        $this->db->query("SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }

    public function getData(string $dir) {
       $array = new Files_model();
       return call_user_func_array([$array, 'getData'],[$dir, 'nama', 'npm', 'jurusan', 'umur'] );
    }

    public function getMahasiswaNPM($npm){
        $this->db->query("SELECT * FROM mahasiswa WHERE npm = :npm");
        $this->db->bind('npm', $npm);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data) {
        $query = "INSERT INTO mahasiswa VALUES
        (:nama, :npm, :jurusan, :umur)";
        $this->db->query($query);
        $this->db->bind('nama', trim($data['nama']));
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('umur', trim($data['umur']));

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($npm) {
        $query = "DELETE FROM mahasiswa WHERE npm = :npm";
        $this->db->query($query);
        $this->db->bind('npm', $npm);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataMahasiswa($data) {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    npm = :npm,
                    jurusan = :jurusan,
                    umur = :umur
                    WHERE npm = :id";

        $this->db->query($query);
        $this->db->bind('nama', trim($data['nama']));
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('umur', trim($data['umur']));
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    

}