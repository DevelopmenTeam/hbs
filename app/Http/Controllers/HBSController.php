<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HBSController extends Controller {
  public function index() {
    if (!App::environment('local')) {
      if (Https::https()) {
        return view('layouts.base');
      } else {
        return redirect('https://hbs.magma-soft.at/index.php');
      }
    } else {
      return view('layouts.base');
    }
  }

  public function Modal(Request $request) {
    $serviceID = $request->input('serviceID');
    return $serviceID;
  }
}
