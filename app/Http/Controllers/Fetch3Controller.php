<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

// Controller for the migration table zorg

class Fetch3Controller extends Controller
{
    
    public function index() {

      $user = User::select("forename", "name", "streetnumber", "zipcode", "street", "zorg", "telephone")->where('zorg', 1)->get();
      $data = [
        'user' => $user
      ];

      return view('fetch.index3',$data);
    }
}
