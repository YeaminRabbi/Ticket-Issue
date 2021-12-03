<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TicketIssue;

class UserPassportDetails extends Model
{
    function passport_info(){
        return $this->belongsTo(TicketIssue::class, 'user_passport_details');
    }
}
