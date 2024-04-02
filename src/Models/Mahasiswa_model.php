<?php 
namespace App\Models;
class Mahasiswa_model {
    // private $mhs = [[]];

    public function getData(string $dir): array {
       

        $file = fopen($dir, 'r');
        $item = fgetcsv($file); // hilangin header

        $content = [];

        while (($item=fgetcsv($file))!==false) {
            $item = $this->readFiles($item, 'nama', 'npm', 'jurusan');
            $content[] = $item;
        }
        
        return $content;
    }

    function readFiles(array $row, string $key1, string $key2, string $key3, string $key4 = null) : array {
        [$field1, $field2, $field3] = $row; // declare variable with initial value of the arguments given
        
        return [
          $key1 => $field1,
          $key2 => $field2,
          $key3 => $field3,
          isset($field4) ? $field4 : null,
        ];
      }


}