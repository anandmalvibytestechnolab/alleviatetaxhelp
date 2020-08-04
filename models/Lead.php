<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $guarded = [];
    public static $readableLeadModel = 'Leads';

    public static function getLoopView(){
        return view('backend._leads_loop')->name();
    }
}
