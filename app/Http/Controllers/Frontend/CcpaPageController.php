<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CcpaPageController extends Controller
{
    public function show()
    {
        return view('frontend.ccpa');
    }
}
