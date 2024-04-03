<?php

namespace App\Core;

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASS;
  private $database = DB_DATABASE;

  private $ddh;
  private $stmt;

  public function __construct() {
    $dsn = 'mysql:host=' . $this->host;
  }
}