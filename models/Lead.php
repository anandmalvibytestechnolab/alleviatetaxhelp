<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //protected $guarded = [];
    
    protected $fillable = [
        'affid',
        'cake_status', 'cake_lead_id', 'cake_response', 'ckm_offer_id',
        'case_id', 'current_monthly_income', 'current_sit', 'crm_response',
        'email_address', 'enrolled_irs',
        'first_name', 'last_name',
        'offer_id', 'opt_in', 'other_current_situation',
        'page_url', 'primary_phone',
        'query_parameters', 'ref_url', 'reqid',
        's1', 's2', 's3', 'state', 'subid',
        'tax_debt', 'tcpa',
        'user_ip_address', 'utm_source', 'utm_medium', 'utm_campaign',
        'zip_code'
    ];

    public static $readableLeadModel = 'Leads';

    public static function getLoopView(){
        return view('backend._leads_loop')->name();
    }
}
