<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    public function showLoginForm()
    {
        return view('auth.custome_login');
    }
    public function login()
    {
        return true;
    }
}
