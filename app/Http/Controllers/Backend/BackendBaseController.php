<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Http\Middleware\BackendAuth;

class BackendBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            BackendAuth::class
        ]);
    }
}