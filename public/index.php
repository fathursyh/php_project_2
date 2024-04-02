<?php

use App\Core\App;

require '../vendor/autoload.php';
define('BASEPATH', 'http://localhost');
define('DIREKTORI', BASEPATH . '/php_project_2/public');

// RUN APP
$app = new App();
