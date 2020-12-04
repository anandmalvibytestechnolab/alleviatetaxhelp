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
        $this->requestObserver($request, $validData);

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
            'query_parameters' => ['nullable'],
            'ip_address' => ['nullable'],
            'user_agent' => ['nullable'],
            'wants_special_offers' => ['nullable'],
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

    /**
     * Used to manage and prepare the request data based on requirement
     * Only Manipulating request data
     *
     * @param   Request $request
     * @param   array $validData
     * @author  Anand Malvi <anand.malvi@bytestechnolab.in>
     * @return  array
     */
    private function requestObserver($request, &$validData) : array
    {
        $validData['user_ip_address'] = $request->ip();
        $validData['opt_in'] = ($request->input('wants_special_offers') == 'on') ? 1 : 0;
        $validData['enrolled'] = strtolower($request->input('enrolled_irs'));
        $currentSit = (count($request->input('current_sit')) > 1) ?
            implode('|', $request->input('current_sit')) : $request->input('current_sit')[0];
        $validData['current_sit'] = $currentSit;
        $validData['why_reason'] = $currentSit;
        return $validData;
    }
}
