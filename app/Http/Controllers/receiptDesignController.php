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
            return view('design/menu');
        } else {
            return view('auth/login');
        }
    }
}
