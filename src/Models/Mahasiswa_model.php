<?php 
namespace App\Models;
class Mahasiswa_model {

    public function getData(string $dir) {
       $array = new Files_model();
       return call_user_func_array([$array, 'getData'],[$dir, 'nama', 'npm', 'jurusan', 'umur'] );
    }



}