<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use Auth;
use Illuminate\Http\Request;
use Log;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$company_id = Auth::user()->company_id;
        //$company = \App\Company_information::whereCompany_id($company_id)->first();
        $company = \App\Company_information::whereCompany_id($id)->first();

        return view('setting.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, $id)
    {
        //
        if($request->action === 'back') {
            return redirect()->route('receiptdesign.menu');
        } else {
            $company = \App\Company_information::find($id);
            $company->name = $request->name;
            $company->address = $request->address;
            $company->tel = $request->tel;
            $company->fax = $request->fax;
            $company->email = $request->email;
            $company->save();
            return redirect()->route('receiptdesign.menu');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
