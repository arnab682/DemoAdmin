<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function inbox(){

      return view('welcome');
    }
    
}
