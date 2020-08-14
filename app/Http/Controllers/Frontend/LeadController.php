<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Src\LeadToCrm;
use Models\Lead;

class LeadController extends Controller
{
    /**
     * @var LeadToCrm
     */
    private $leadToCrm;

    public function __construct(LeadToCrm $leadToCrm)
    {
        $this->leadToCrm = $leadToCrm;
    }

    public function store()
    {
        d(request()->all());
        $rules = [
            'current_sit' => ['nullable'],
            'other_current_situation' => ['nullable'],
            'tax_debt' => ['nullable'],
            'enrolled_irs' => ['nullable'],
            'Employment_status' => ['nullable'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'email_address' => ['required', 'email'],
            'primary_phone' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
        ];

        $validData = request()->validate($rules);

        $lead = Lead::create($validData);
        $this->leadToCrm->postLeadToCrm($lead);
        return redirect()->route('FE_CONFIRMATION_PAGE_SHOW');
    }
}
