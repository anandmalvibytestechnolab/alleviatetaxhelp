<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Models\CcpaLead;

class CcpaLeadController extends Controller
{
    public function store()
    {
        $rules = [
            'email_address' => ['required', 'email'],
            'requestor' => ['nullable'],
            'requestoptions' => ['nullable'],
            'first_name' => ['nullable'],
            'last_name' => ['nullable'],
            'street' => ['nullable'],
            'apt' => ['nullable'],
            'city' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
            'primary_phone' => ['nullable'],
        ];
        $validData = request()->validate($rules);
        CcpaLead::create($this->buildStoreData($validData));
        return redirect()->route('CCPA_CONFIRMATION_PAGE_SHOW');
    }

    private function buildStoreData($validData)
    {
        return collect($validData)
            ->merge([
           'requestoptions' => $this->transformArrayToString($validData['requestoptions'] ?? null)
        ])
            ->toArray();
    }

    private function transformArrayToString($data)
    {
        $data = collect($data);
        $valueCount = $data->count();
        if($valueCount === 1){
            return (string) $data[0];
        }
        return $data->implode(',');
    }
}
