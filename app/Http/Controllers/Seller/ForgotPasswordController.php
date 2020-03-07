<?php

namespace App\Http\Controllers\Seller;

use Password;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function broker()
    {
        return Password::broker('admins');
    }
    
    public function showLinkRequestForm()
    {
        return view('myadmin.passwords.email');
    }
}
