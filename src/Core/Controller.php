<?php

namespace App\Core;

class Controller
{
    protected $user;

    public function render($view, $data = [])
    {
        require_once '../src/Views/' . $view . '.php';
    }

    public function model($model)
    {
        $namaModel = 'App\\Models\\';
        return new ($namaModel . $model);
    }
}
