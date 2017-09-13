<?php

namespace App\Libraries;

class Https {
    public static function https() {
      if (isset($_SERVER['SERVER_PORT']) && ($_SERVER['SERVER_PORT'] === '443')) {
        return TRUE;
      }
    }
}
