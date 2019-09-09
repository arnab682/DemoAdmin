<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdate;

class SuperadminController extends Controller
{
    public function __construct(){
      $this->middleware('CheckRole:superadmin');
      $this->middleware('auth');
    }

    public function dashboard(){
      
      return view('superadmin.dashboard');
    }

    public function users(){
      $users = User::all();
      //dd($users);
      return view('superadmin.users', compact('users'));
    }

    
    public function editUser($id){
      //dd($id);
      $user = User::where('id', $id)->first();
      return view('superadmin.editUser', compact('user'));
    }

    public function editUserUpdate(UserUpdate $request, $id){

      //dd($request);
      $user = User::where('id', $id)->first();
      $user->name = $request['name'];
      $user->email = $request['email'];
      //dd($request['admin']);
      if ($request['superadmin'] == 1) {
        $user->superadmin == true;
        //dd();
      } elseif ($request['admin'] == 1) {
        $user->admin == true;
        //dd($request['admin']);
      }
      dd($user);
      $user->save();
      dump($user);die();
      return back()->with('success', "User Update Successfully");
    }
    
    public function deleteUser($id){
      $user = User::where('id', $id)->first();
      $user->delete();

      return back()->with('success', "Post Delete Successfully");
    }
}
