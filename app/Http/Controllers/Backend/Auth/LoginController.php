<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\SecureConnection;
use App\Http\Middleware\RedirectIfAuthenticated;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            RedirectIfAuthenticated::class,
            SecureConnection::class
        ]);
        if (request()->method() !== 'GET') {
            $this->middleware(['throttle:5,2']);
        }
    }

    private $rules = [
        'email' => 'required|email', 'password' => 'required',
    ];

    /**
     * Show the web form to log in
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('backend.login');
    }

    public function authenticate()
    {
        $this->validate(request(), $this->rules);

        if (auth()->attempt(['email' => request('email'), 'password' => request('password'), 'active' => 1])) {
            // Authentication passed...
            return redirect()->intended(route('BE_DASHBOARD_SHOW'));
        }

        flash_message('Wrong credentials', 'danger');
        return redirect()->route('BE_LOGIN_FORM');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('BE_LOGIN_FORM');
    }
}
