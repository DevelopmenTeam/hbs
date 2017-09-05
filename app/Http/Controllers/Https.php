<?php

namespace App\Http\Controllers;

class Https {
    public static function https() {
      if ($_SERVER['SERVER_PORT'] === 443) {
        return TRUE;
      }
    }
}
