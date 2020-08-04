<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class CcpaLead extends Model
{
    protected $guarded = [];
    public static $readableLeadModel = 'CCPA records';

    public static function getLoopView(){
        return view('backend._ccpa_leads_loop')->name();
    }
}
