<?php

namespace App\Core;

class Flasher
{
    public static function setFlash($text, $action, $type)
    {
        $_SESSION['flash'] = [
            'text' => $text,
            'action' => $action,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>' . $_SESSION['flash']['text'] . '</strong> ' . $_SESSION['flash']['action'] .
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}
