<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use vendor\setasign\Tcpdf\Fpdi;
use vandor\tecnickcom\tcpdf\examples\example_001;

class ReceiptPrintController extends Controller
{
    //
    public function print(Reqest $request)
    {
        example_001();

    }
}
