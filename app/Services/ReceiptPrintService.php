<?php

namespace App\Services;

use Illuminate\Http\Request;
use vendor\setasign\Tcpdf\Fpdi;
use App\Services\TcpdfServiceProvider;

class ReceiptPrintService
{
    //
    protected $tcpdf;

    public function __construct(TcpdfService $tcpdfservice)
    {
        $this->tcpdf = $tcpdfservice;
    }

    public function print()
    {
        $this->tcpdf->AddPage();
        $this->tcpdf->SetFont("kozgopromedium", "", 10);
        $html = <<< EOF
            <style>
            h1 {
                font-size: 24px; // 文字の大きさ
                color: #ff00ff; // 文字の色
                text-align: center; // テキストを真ん中に寄せる
            }
            p {
                font-size: 12px; // 文字の大きさ
                color: #000000; // 文字の色
                text-align: left; // テキストを左に寄せる
            }
            </style>
            <h1>侍エンジニア塾</h1>
            <p>
            今日は侍エンジニア塾についてお話させていただきます。
            </p>
            EOF;

        $this->tcpdf->writeHTML($html); // 表示htmlを設定
        $this->tcpdf->Output('samurai.pdf', 'I');

    }
}
