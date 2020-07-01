<?php

namespace App\Services;

use TCPDF;

class ReceiptPrintService
{
    public function __construct(TCPDF $pdf)
    {
        $this->pdf = $pdf;
    }

    public function printPDF()
    {
        $this->pdf->AddPage();
        $this->pdf->SetFont("kozgopromedium", "", 10);

        $this->pdf->writeHTML(view("form.sampleReceipt"));
        $this->pdf->Output('samurai.pdf', 'I');
    }
}
