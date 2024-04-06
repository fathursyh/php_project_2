<?php

use App\Core\App;

include_once '../src/Config/config.php';
require '../vendor/autoload.php';

// RUN APP
if(!session_id()) {
    session_start();
}
$app = new App();
