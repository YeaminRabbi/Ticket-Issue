<?php

namespace App\Exports;

use App\TicketIssue;
use App\User;
use App\AirlineName;
use App\UserPassportDetails;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class DataExportExcel implements FromView,WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {

        return view('admin.exports.excell-all-data', [
            'Tickets' => TicketIssue::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 10,
            'B' => 20,
            'C' => 20, 
            'D' => 30, 
            'E' => 30,            
        ];
    }

}
