<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

// Controller for the migration table boodschappen

class FetchController extends Controller
{
  
    public function index() {

      $user = User::select("forename", "name", "streetnumber", "street", "zipcode", "boodschappen", "telephone")->where('boodschappen', 1)->get();
      $data = [
        'user' => $user
      ];

      return view('fetch.index',$data);
    }
}
