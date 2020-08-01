<?php

namespace App\Http\Controllers\Frontend;

use App\CcpaLead;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CcpaLeadController extends Controller
{
    public function store()
    {
        $rules = [
            'email_address' => ['required', 'email']
        ];
        $validData = request()->validate($rules);
        CcpaLead::create($validData);
        return redirect()->route('CCPA_CONFIRMATION_PAGE_SHOW');
    }
}
