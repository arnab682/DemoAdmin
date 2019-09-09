<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;

class AdminController extends Controller
{
    //
    public function __construct(){
      $this->middleware('CheckRole:admin');
      $this->middleware('auth');
    }

    public function dashboard(){
      
      return view('admin.dashboard');
    }


    public function users(){

      echo "hi";
      
    }
    

}
