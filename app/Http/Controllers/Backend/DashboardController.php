<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BackendBaseController
{
    public function show()
    {
        return view('backend.dashboard');
    }
}
