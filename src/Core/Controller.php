<?php
namespace App\Core;
class Controller {
    public function __construct() {
        $this->user = new User;
    }
    
        public function render($view, $data = []) {
            require_once '../src/Views/' . $view . '.php';
        }
        
        public function model($model) {
            $namaModel = 'App\\Models\\';
            return new ($namaModel . $model);
        }
}