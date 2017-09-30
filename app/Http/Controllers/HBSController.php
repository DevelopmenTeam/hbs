<?php

namespace App\Http\Controllers;

use App\Libraries\Https;
use App\Mail\HbsContact;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Mail;

class HBSController extends Controller {

	/*public function __construct() {
		$this->middleware('guest');
	}*/

  public function index() {
    if (!App::environment('local')) {
      if (Https::https()) {
        return view('layouts.base');
      } else {
        //return redirect('https://hbs.magma-soft.at/index.php');
				return view('layouts.base');
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

  public function sendEmail(Request $request) {
    $result = [];
    if(!empty($request->input('email'))){
      Mail::to('luisnic20@gmail.com')->send(new HbsContact($request));
      $result = ['result' => 'completo jeje'];
    }
    else{
      $result = ['result' => 'erróneo jeje'];
    }
    return json_encode($result, JSON_PRETTY_PRINT);
  }
}
