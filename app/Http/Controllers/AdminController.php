<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\AirlineName;
use App\TicketIssue;
use App\UserPassportDetails;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Exports\DataExportExcel;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{


   public function index()
   {    
        

       return view('admin.frontend.index');
   }
    
    function userinformation()
    {
        $user = Auth::user();
        if($user->role == 'admin'){
            $users = User::all();

            return view('admin.backend.user.user', [
                'users' => $users
            ]);
        }
        else{
            return view('404NotFound');
        }
        
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
        
        $airline=AirlineName::where('id',$id)->first();
        $airline->delete(); 

        return back();
    }

    function ticket_info(Request $req)
    {

        $this->validate($req,[
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'passport_number' => 'required|string',
            'expire_date' => 'required|string',
            'dob' => 'required|string',
            'pnr' => 'required|string',
            'destination' => 'required|string',
            'travel_date' => 'required|string',
            'issue_date' => 'required|string',
            'issue_from' => 'required|string',
            'purchase_amount' => 'required|string',
            'sale_amount' => 'required|string',
            'ticket_number' => 'required|string',
            
           ]);


        $user_details = new UserPassportDetails;
        $ticket = new TicketIssue;
        $user = Auth::user();


        $user_details->first_name = $req->firstname;
        $user_details->last_name = $req->lastname;
        $user_details->passport_number = $req->passport_number;
        $user_details->expire_date = $req->expire_date;
        $user_details->dob = $req->dob;
        $user_details->save();

        

        $ticket->pnr = $req->pnr;
        $ticket->user_passport_details_id = $user_details->id;
        $ticket->destination = $req->destination;
        $ticket->travel_date = $req->travel_date;
        $ticket->issue_date = $req->issue_date;
        $ticket->issue_by =  $user->name;
        $ticket->issue_from = $req->issue_from;
        $ticket->purchase_amount = $req->purchase_amount;
        $ticket->sale_amount = $req->sale_amount;
        $ticket->ticket_number = $req->ticket_number;
        $ticket->save();

        return back();



    }


    function ticketRecords()
    {

        $ticket_list = TicketIssue::orderBy('created_at', 'desc')->get();

        
        return view('admin.backend.ticket.ticket_list',[
            'ticket_list'=> $ticket_list
        ]);
    }



    function ticket_details($id)
    {
        $ticket = TicketIssue::where('id', $id)->first();
        $user_passport = UserPassportDetails::where('id',$ticket->user_passport_details_id)->first();


        return view('admin.backend.ticket.ticket_details',[
            'ticket'=> $ticket,
            'user_passport'=>$user_passport
        ]);


    }


    function randomData()
    {
        $user = Auth::user();
        $airlines = AirlineName::all();
        $airlist =[];
        foreach($airlines as $key => $data)
        {
            $airlist[$key] = $data->airlines_name;
        }

       for($i=0;$i<50;$i++)
       {
            //passport data algorithm
            $user_details = new UserPassportDetails;
            

            $user_details->first_name = Str::random(10);
            $user_details->last_name = Str::random(10);
            $user_details->passport_number =substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 9);
            $user_details->last_name = Str::random(10);
            $user_details->expire_date= Carbon::today()->subDays(rand(0, 6000))->format('Y-m-d');
            $user_details->dob= Carbon::today()->subDays(rand(0, 6000))->format('Y-m-d');
            $user_details->save();

            //ticket issue algorithm
            $ticket = new TicketIssue;
            
            $ticket->pnr = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            $ticket->user_passport_details_id = $user_details->id;
            $ticket->destination = Str::random(10);
            $ticket->travel_date = Carbon::today()->subDays(rand(0, 368))->format('Y-m-d');
            $ticket->issue_date = Carbon::today()->subDays(rand(0, 368))->format('Y-m-d');
            $ticket->issue_by =  $user->name;

          
            $ticket->issue_from = $airlist[2];
            $ticket->purchase_amount = rand(4000,40000);
            $ticket->sale_amount = rand(5000,50000);
            $ticket->ticket_number = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
            $ticket->save();
       }
       
        return view('admin.frontend.index');

       
    }


    function ExportExcel()
    {
        return Excel::download(new DataExportExcel, 'Ticket-Records.xlsx');
    }

}   
