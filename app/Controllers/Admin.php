<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPemilih;
class Admin extends BaseController
{
    public function index()
    {
        $pemilih = new ModelPemilih();
        $data=[

            'jumlahPemilih' => $pemilih->table('pemilih')->countAllResults(),
            'sudah' => $pemilih->table('pemilih')->where('pilihan IS NOT NULL')->countAllResults(),
            'pil1' => $pemilih->table('pemilih')->where('pilihan', 1)->countAllResults(),
            'pil2' => $pemilih->table('pemilih')->where('pilihan', 2)->countAllResults(),
        ];
        return view('admin',$data);
    }
    public function datapemilih()
    {
        $pemilih = new ModelPemilih();
        $data=[
            'jumlahPemilih' => $pemilih->table('pemilih')->countAllResults(),
            'sudah' => $pemilih->table('pemilih')->where('pilihan IS NOT NULL')->countAllResults(),
            'pemilih'=>$pemilih->table('pemilih')->get()->getResult(),
        ];
        return view('datapemilih',$data);
    }
    public function tambah()
    {
        $nama = $this->request->getPost('nama');
        $nis = $this->request->getPost('nis');
        $kelas = $this->request->getPost('kelas');
        $data = 
            [
                'id' => null,
                'nis'=> $nis,
                'nama'=> $nama,
                'kelas'=> $kelas,
                'pilihan'=>null
            ];
            // dd($data);
    $pemilih = new ModelPemilih();
    $pemilih->insert($data);
    $this->session->setFlashdata('berhasil', 'Data Sudah Tersimpan');
    return redirect()->to(base_url('/admin/datapemilih'));
    }
}
