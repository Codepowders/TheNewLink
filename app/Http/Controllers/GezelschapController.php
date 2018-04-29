<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

// Controller for the migration table gezelschap

class GezelschapController extends Controller
{

    public function index() {
      $user = User::select("forename", "name", "streetnumber", "zipcode", "street", "gezelschap", "telephone", "avatar")->where('gezelschap', 1)->get();
      $data = [
        'user' => $user
      ];

      return view('platform.gezelschap',$data);
    }
}
