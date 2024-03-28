<?php
namespace App\Core;
class Controller {
        public function render($view, $data = []) {
            require_once '../src/Views/' . $view . '.php';
        }
}