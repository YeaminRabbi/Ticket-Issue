<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UserPassportDetails;

class TicketIssue extends Model
{
    function passport_info(){
        return $this->belongsTo(UserPassportDetails::class, 'id');
    }


    
}
