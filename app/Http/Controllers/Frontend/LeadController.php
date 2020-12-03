<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Src\LeadToCake;
use App\Src\LeadToCrm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Models\Lead;
use Illuminate\Support\Arr;

class LeadController extends Controller
{
    /**
     * @var LeadToCrm
     */
    private $leadToCrm;

    public function __construct(LeadToCrm $leadToCrm, LeadToCake $leadToCake)
    {
        $this->leadToCrm = $leadToCrm;
        $this->leadToCake = $leadToCake;
    }

    /**
     * Create lead with all form data
     *
     * @param   Request $request
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  RedirectResponse
     */
    public function store(Request $request)
    {
        
        $validData = request()->validate($this->getStoreRules());
        $validData['user_ip_address'] = $request->ip();

        // Get query paramters request data for Lead
        $customFields = $this->leadToCake->prepareFields($request);
        
        $requestData = array_merge($validData, $customFields);
        
        // Create data on CAKE server
        $cakeData = $this->leadToCake->postToCake($requestData);
        
        // Modify CAKE server response based on our DB fields
        $creatable = $this->cakeResponseObserver($cakeData, $requestData);
        
        // Create Lean in Database
        Lead::create($creatable);
        return redirect()->to($creatable['redirect']);

        /** Old Code: Which was posting lead to CRM server
        $this->leadToCrm->postLeadToCrm($lead);
        return redirect()->route('FE_CONFIRMATION_PAGE_SHOW');
        */
    }

    /**
     * Get lead store validation rules
     *
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return array
     */
    private function getStoreRules() : array
    {
        return [
            'current_sit' => ['nullable'],
            'other_current_situation' => ['nullable'],
            'tax_debt' => ['nullable'],
            'enrolled_irs' => ['nullable'],
            'current_monthly_income' => ['nullable'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'email_address' => ['required', 'email'],
            'primary_phone' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
            'page_url' => ['nullable'],
            'ref_url' => ['nullable'],
        ];
    }

    /**
     * Prepare cake response as database accept
     *
     * @param   array $cakeData
     * @param   array $requestData
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function cakeResponseObserver($cakeData, $requestData) : array
    {
        $result = Arr::only($cakeData, ['redirect', 'cake_response', 'leadid', 'cake_status']);
        $result['cake_lead_id'] = $result['leadid'];
        unset($result['leadid']);
        return array_merge($result, $requestData);
    }
}
