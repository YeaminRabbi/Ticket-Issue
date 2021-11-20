<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\AirlineName;
use App\TicketIssue;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


   public function index()
   {    
        

       return view('admin.frontend.index');
   }
    
    function userinformation()
    {
        $users = User::all();

        return view('admin.backend.user.user', [
            'users' => $users
        ]);
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


    function ticketIssue()
    {
        $airlines = AirlineName::all();
       return view('admin.backend.ticket.ticket_issue_form',[
           'airlines'=>$airlines
       ]);

    }


    function airlines()
    {

        $airlines = AirlineName::all();
        
        return view('admin.backend.airlines.airlines_details', [
            'airlines'=>$airlines
        ]);

    }


    function createAirlines(Request $req ){

        $this->validate($req,[
            'airlines_name' => 'required|string',
           ]);

        $date= date('d-m-y H:i:s');
        
        $airline = new AirlineName;
        $airline->airlines_name = $req->airlines_name;
        $airline->created_at = $date;
        $airline->save();

        return back();
    }


    function airline_delete($id)
    {
        return $id;
    }
}   
