<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

// Controller for the migration table Klusjes

class Fetch2Controller extends Controller
{
    public function index() {
      $user = User::select("forename", "name", "streetnumber", "zipcode", "street", "klusjes", "telephone")->where('klusjes', 1)->get();
      $data = [
        'user' => $user
      ];
      return view('fetch.index2',$data);
    }
}
