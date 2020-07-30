<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfirmationPageController extends Controller
{
    public function show()
    {
        return view('frontend.confirmation_page');
    }
}
