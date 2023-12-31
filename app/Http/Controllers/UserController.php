<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $req){
       $user = User::where(['email'=> $req->email])->first();

        if($user || Hash::check($req->password, $user->password)){
           $req->session()->put('user', $user);
            return redirect('/'); 
        }
        else{
            return 'Username or password is not matched';
        }
    }

    function register(Request $req){
      $user = new User;
      $user->name = $req->name;
      $user->email =$req->email;
      $user->password =Hash::make($req->password);
      $user->save();
      return redirect('/login');
    }
}
