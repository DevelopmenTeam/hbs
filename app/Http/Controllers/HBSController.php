<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\View;

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
    if($request->input('type') == 'service'){
      $item = config('services_hbs.es.items.'.$request->input('id'));
    }
    else{
      $item = config('team_hbs.es.items.'.$request->input('id'));
    }
    return json_encode($item, JSON_PRETTY_PRINT);
  }
}
