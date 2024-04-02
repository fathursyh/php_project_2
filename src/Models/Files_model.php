<?php

namespace App\Models;

class Files_model {

    public function getData(string $dir, string $key1, string $key2, string $key3, string $key4 = null): array {
       

        $file = fopen($dir, 'r');
        $item = fgetcsv($file); // hilangin header

        $content = [];

        while (($item=fgetcsv($file))!==false) {
            if(count($item)!=4) {
                while(count($item)<4) {
                    array_push($item, '');
                }
            }
            $item = $this->readFiles($item, $key1, $key2, $key3, $key4);
            $content[] = $item;
        }
        
        return $content;
    }

    private function readFiles(array $row, string $key1, string $key2, string $key3, string $key4 = null) : array {
        [$field1, $field2, $field3, $field4] = $row; // declare variable with initial value of the arguments given
        return [
          $key1 => $field1,
          $key2 => $field2,
          $key3 => $field3,
          $key4 => $field4,
        ];
      }
}