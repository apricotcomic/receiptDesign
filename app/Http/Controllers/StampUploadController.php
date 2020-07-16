<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StampUploadController extends Controller
{
    //
    public function index()
    {
        $company_id = Auth::user()->company_id;
        $company = \App\Company_information::whereCompany_id($company_id)->first();
        $path = '/public/stamps/' . $company_id;
        $files = Storage::files($path);
        foreach ($files as $key => $value) {
            $stamps[$key] = basename($value);
        }
        unset($value);

        return view('upload/upload' ,compact('company', 'stamps'));
    }

    //
    public function upload(Request $request)
    {
        $company_id = Auth::user()->company_id;
        $company = \App\Company_information::whereCompany_id($company_id)->first();
        // make company use stamp directory
        //
        $filepath = '/public/stamps/' . Auth::user()->company_id;
        $filename = $request->file('filename')->getClientOriginalName();

        $request->file('filename')->storeAs($filepath , $filename);

        $company->stamp_image = $filename;
        $company->save();

        return view('upload/upload' ,compact('company'))->with('flash_message', 'Upload OK');
    }
}
