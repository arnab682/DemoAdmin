<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->superadmin == true){
          return redirect(route('superadminDashboard'));
        }elseif (Auth::user()->admin == true) {
          return redirect(route('adminDashboard'));
        }else {
          return redirect(route('userDashboard'));
        }
    }
}
