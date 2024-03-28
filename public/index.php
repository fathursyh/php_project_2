<?php 
require '../vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];
$viewDir = '../src/Views/';

switch ($request) {
  case '':
  case '/':
    require $viewDir . 'Home/Home.php';
    break;
  

  default:
    http_response_code(404);
    echo "NOT FOUND";
    break;  
}
