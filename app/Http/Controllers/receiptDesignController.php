<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ReceiptDesignController extends Controller
{
    //
    public function menu()
    {
        //
        if (Auth::check()) {
            $company_id = Auth::user()->company_id;
            return view('design/menu', compact('company_id'));
        } else {
            return view('auth/login');
        }
    }
}
