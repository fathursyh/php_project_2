<?php

namespace App\Core;

class LogicController {

  public static function checkValue($condition1): bool {
    if($condition1) {
      return true;
    } else {
      return false;
    }
  }

  public static function checkUserFromSession($variable) {
    if(!isset($_SESSION[$variable])) {
      User::setStatus(Status::LOGOUT);
    } else {
      User::setStatus($_SESSION['user']);
    }
  }


}