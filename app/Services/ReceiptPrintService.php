<?php

namespace App\Services;

use TCPDF;
use App\Company_information;

class ReceiptPrintService
{
    public function __construct(TCPDF $pdf)
    {
        $this->pdf = $pdf;
    }

    public function printPDF(Company_information $company)
    {
        $this->pdf->AddPage();
        $this->pdf->SetFont("kozgopromedium", "", 10);
        $this->pdf->writeHTML(view("form.sampleReceipt", compact('company')));
        $this->pdf->Output('samurai.pdf', 'I');
    }
}
