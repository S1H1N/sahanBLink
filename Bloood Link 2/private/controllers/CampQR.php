<?php
class CampQR extends Controller
{
    function index($id='')
    {
        if (isset($_GET['id'])) {
            $campqr = new QR();

            $campqr->DownloadQR($_GET['id']);
        }
        // echo $qr;
        // echo "<img src=" . ROOT . "/" . $qrcode;
        $this->view('campqrcode');
    }

}