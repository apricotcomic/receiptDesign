<?php

namespace App\Http\Controllers;

use App\Services\ReceiptPrintService;
use Illuminate\Http\Request;
use ReceiptPrint;

class ReceiptPrintController extends Controller
{
    public function print($id)
    {
        $company = \App\Company_infomation::whereCompany_id($id)->first();

        ReceiptPrint::printPDF($company);

    }
}
