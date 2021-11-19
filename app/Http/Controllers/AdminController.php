<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


   public function index()
   {    
        $user = Auth::user();
        if($user->role != 'admin')
        {
            return view('404NotFound');
        }

       return view('admin.frontend.index');
   }
    
    function createuser()
    {
        $user = Auth::user();
        if($user->role != 'admin')
        {
            return view('404NotFound');
        }

        return view('admin.backend.user.user');
    }


    function registeruser(Request $req){


        
        $this->validate($req,[
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,',
            'password'=>'required|string',
           ]);

        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();

        return back();


    }
}
