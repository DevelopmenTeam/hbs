<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HBSController extends Controller {
  public function index() {
    return view('layouts.base');
  }

  public function Modal(Request $request) {
    $serviceID = $request->input('serviceID');
    return $serviceID;
  }
}
