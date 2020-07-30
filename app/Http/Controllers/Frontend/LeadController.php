<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store()
    {
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

        Lead::create($validData);
        return redirect()->route('FE_CONFIRMATION_PAGE_SHOW');
    }
}
