<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
            'email_address' => ['nullable'],
            'primary_phone' => ['nullable'],
            'state' => ['nullable'],
            'zip_code' => ['nullable'],
        ];

        $validData = request()->validate($rules);
    }
}
