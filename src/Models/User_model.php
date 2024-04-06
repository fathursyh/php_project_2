<?php
namespace App\Models;

use App\Core\App;
use App\Core\Database;

class User_model {
  private $user;
  private $db;
  private $userLogin;

  public function __construct() {
    $this->db = new Database;
  }
  public function getUserFromEmail($email) {
    $this->db->query("SELECT * FROM users WHERE email = :email");
    $this->db->bind('email', $email);
    return $this->db->single();
  }

  public function getUser($email) {
    $this->user = $this->getUserFromEmail($email);
    return $this->user['email'];
  }

  public function login($data) {
    $this->userLogin = $this->getUserFromEmail($data['email']);
    if ($this->userLogin && $this->userLogin['password'] == $data['password']) {
      App::$state = true;
      return true;
    } else {
      return false;
    }
  }

 
}