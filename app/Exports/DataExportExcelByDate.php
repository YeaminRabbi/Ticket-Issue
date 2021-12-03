<?php

namespace App\Exports;

use App\TicketIssue;
use App\User;
use App\AirlineName;
use App\UserPassportDetails;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class DataExportExcelByDate implements FromView,WithColumnWidths
{
    
    public function __construct($from ,$to)
    {
        $this->from = $from;
        $this->to = $to;
    }
   
    public function view(): View
    {


        return view('admin.exports.excell-all-data', [
           'Tickets' => TicketIssue::whereBetween('created_at', [$this->from,$this->to])->orderBy('created_at', 'desc')->get()

        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 20,
            'C' => 20, 
            'D' => 20, 
            'E' => 20,  
            'F' => 40,            

        ];
    }
}
