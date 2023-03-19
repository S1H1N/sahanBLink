<?php

$dir = dirname(__DIR__, 2);
require_once($dir . "/public/libraries/phpqrcode/qrlib.php");
require_once($dir . "/public/libraries/tcpdf/tcpdf.php");

class QR extends model
{


    public function makeQR($campID)
    {
        $dir = dirname(__DIR__, 2);
        $path = $dir . "/public/images/qrcodes/";
        $filename = time() . rand(1, 10000) . ".jpeg";
        $qrcode = $path . $filename;
        // echo $campID;
        QRcode::png(ROOT."/campfeedback"."?id=".trim($campID,"'"), $qrcode, 'H', 16, 16);
        // echo "<img src=" . ROOT . "/" . $qrcode;
        return $filename;
    }

    public function DownloadQR($campID)
    {
        $qr = new QR();
        $filepath = $qr->makeQR($campID);
        $pdf = new Tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setTitle('Camp QR');
        $pdf->AddPage();
        $html = '<h1>Camp QR</h1>';
        $pdf->writeHTML($html);
        // $html .= "<p>$filepath</p><img src=" .'"'.ROOT."/images/qrcodes/". $filepath .'"';
        $pdf->Image(ROOT . "/images/qrcodes/" . $filepath,2,20,200,200);
       
        $pdf->Output('output.pdf', 'D');

    }
}