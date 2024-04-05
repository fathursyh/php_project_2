<?php

namespace App\Core;

class User {
  private $status;

  public function __construct() {
    $this->setStatus(Status::LOGOUT);
  }
  
  public function getStatus() {
    return $this->status;
  }

  public function setStatus(string $status): self {
    if (!isset(Status::LOGIN_STATUS[$status])) {
      throw new \InvalidArgumentException('invalid status');
    }
    $this->status = $status;
    return $this;
  }
}