<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Spipu\Html2Pdf\Html2Pdf;
use App\Models\ModelPemilih;
class Berita extends BaseController
{
    public function index()
    {
        $pemilih = new ModelPemilih();
        $data=[

            'jumlahPemilih' => $pemilih->table('pemilih')->countAllResults(),
            'sudah' => $pemilih->table('pemilih')->where('pilihan IS NOT NULL')->countAllResults(),
            'belum' => $pemilih->table('pemilih')->where('pilihan IS NULL')->countAllResults(),
            'pil1' => $pemilih->table('pemilih')->where('pilihan', 1)->countAllResults(),
            'pil2' => $pemilih->table('pemilih')->where('pilihan', 2)->countAllResults(),
        ];
        // return view('pdf',$data);
        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML(view('pdf',$data));
        dd($html2pdf->output());
        // Load FPDF library
        

    }
}
