<?php
namespace App\Models;

use App\Core\Database;

class User_model {
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

  public function login($data) {
    $this->userLogin = $this->getUserFromEmail($data['email']);
    if ($this->userLogin && $this->userLogin['password'] == $data['password']) {
      $_SESSION['username'] = $this->userLogin['username'];
      return true;
    } else {
      return false;
    }
  }

}