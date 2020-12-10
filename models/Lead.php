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
        'xxTrustedFormToken', 'xxTrustedFormCertUrl', 'xxTrustedFormPingUrl',
        'zip_code'
    ];

    public static $readableLeadModel = 'Leads';

    public static function getLoopView(){
        return view('backend._leads_loop')->name();
    }

    /**
     * Check the lead if found then delete
     *
     * @param array $data
     */
    public static function validateCcpaWithLead($data)
    {
        self::where(function ($query) use ($data) {
            $query->where('email_address', $data['email_address'])
                    ->orWhere('primary_phone', $data['primary_phone']);
        })->delete();
    }
}
