<?php

namespace App\Core;

class User {
  private static $status = Status::LOGOUT;

  public static function getStatus() {
    return self::$status;
  }

  public static function setStatus(string $status) {
    if (!isset(Status::LOGIN_STATUS[$status])) {
      throw new \InvalidArgumentException('invalid status');
    }
    self::$status = $status;
  }
}