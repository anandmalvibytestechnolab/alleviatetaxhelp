<?php

namespace App\Src;

use Http;
use Illuminate\Http\Client\Response;
use Models\Lead;
use Str;

class LeadToCrm
{
    public function postLeadToCrm(Lead $lead)
    {
        //d($lead->toArray());
        $params = [
            'FNAME' => $lead->first_name,
            'LNAME' => $lead->last_name,
            'TAX_RELIEF_TAX_AMOUNT' => $lead->tax_debt,
            'TAX_RELIEF_PRIMARY_PROBLEM' => $lead->current_sit,
            'UDF1' => $lead->enrolled_irs,
            'UDF2' => $lead->current_monthly_income,
            'EMAIL' => $lead->email_address,
            'CELL_PHONE' => $lead->primary_phone,
            'STATE' => $lead->state,
            'ZIP' => $lead->zip_code,
        ];
        //d($params);
        try {
            $response = Http::get('https://alleviatetax.irslogics.com/postLead.aspx', $params);
        } catch (\Exception $e) {
            $response = $e->getMessage();
        }

        $this->saveCaseId($lead, $response);
//d($response->status());
        //d($response->body());
    }

    private function saveCaseId(Lead $lead, $response)
    {
        if ($response instanceof Response && $this->leadWasAccepted($response)) {
            $lead->case_id = $this->getCaseId($response);
            $lead->save();
            return;
        }
        if ($response instanceof Response && !$this->leadWasAccepted($response)) {
            $lead->case_id = $this->getCaseId($response);
            $lead->save();
            return;
        }

        $lead->case_id = collect($response)->toJson();
        $lead->save();
    }

    private function leadWasAccepted(Response $response)
    {
        $successText = 'CaseID';//Api does not respond with Json
        //<br/>Lead imported successfully.<br/>CaseID: 194250<br/>
        return Str::contains($response->body(), $successText);
    }

    private function getCaseId(Response $response)
    {
        $pattern = '/[0-9]/';
        preg_match_all($pattern, $response->body(), $numbers);
        return join('', $numbers[0]);
    }
}
