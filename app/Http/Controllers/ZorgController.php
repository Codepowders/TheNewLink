<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

// Controller for the migration table zorg

class ZorgController extends Controller
{

    public function index() {

      $user = User::select("forename", "name", "streetnumber", "zipcode", "street", "zorg", "telephone", "avatar")->where('zorg', 1)->get();
      $data = [
        'user' => $user
      ];

      return view('platform.zorg',$data);
    }
}
