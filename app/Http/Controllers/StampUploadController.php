<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StampUploadController extends Controller
{
    //
    public function input()
    {
        $company_id = Auth::user()->company_id;
        $company = \App\Company_information::whereCompany_id($company_id)->first();

        return view('upload/upload' ,compact('company'));
    }

    //
    public function upload(Request $request)
    {
        $company_id = Auth::user()->company_id;
        $company = \App\Company_information::whereCompany_id($company_id)->first();
        // make company use stamp directory
        //
        $filepath = public_path('/storage/stamps/' . Auth::user()->company_id . '/');
        if (!\File::exists($filepath)) {
            $result = Storage::makeDirectory($filepath);
        }
        $filename = $request->file('filename')->getClientOriginalName();

        $request->filename->storeAs($filepath , $filename);

        $company->stamp_image = $filename;
        $company->save();

        return view('upload/upload' ,compact('company'))->with('flash_message', 'Upload OK');
    }
}
