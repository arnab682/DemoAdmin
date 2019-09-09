<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    /*public function __construct(){
      $this->middleware('CheckRole:user');
    }*/

    public function __construct(){
      $this->middleware('auth');
    }

    public function dashboard(){


      return view('user.dashboard');
      //return view('user.dashboard');
    }
    
    
}
