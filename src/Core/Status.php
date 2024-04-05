<?php

namespace App\Core;

class Status {
  public const LOGIN = 'login';
  public const LOGOUT = 'logout';

  public const LOGIN_STATUS = [
    self::LOGIN => 'Login',
    self::LOGOUT => 'Logout'
  ];
  
  
}