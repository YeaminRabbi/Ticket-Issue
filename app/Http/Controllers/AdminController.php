<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;

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
    
}
