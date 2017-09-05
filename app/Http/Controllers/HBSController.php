<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HBSController extends Controller {
  public function index() {
    if (Https::https() === TRUE) {
      return view('layouts.base');
    } else {
      return redirect('https://hbs.magma-soft.at/index.php');
    }
  }

  public function Modal(Request $request) {
    $serviceID = $request->input('serviceID');
    return $serviceID;
  }
}
