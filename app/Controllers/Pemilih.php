<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPemilih;
class Pemilih extends BaseController
{
    public function index()
    {
        if (!session()->get('nis')) {
            return redirect()->to(base_url());
        }
        $pemilih = new ModelPemilih();
        $query=$pemilih->where('nis',session()->get('nis'))->first();
        return view('pemilih',$query);
    }
    public function auth()
    {
        $pemilih = new ModelPemilih();
        $data=$this->request->getPost('nis');
        $query=$pemilih->where('nis',$data)->first();
        if (!$query) {
            $this->session->setFlashdata('message', 'Data tidak ada');
            return redirect()->to(base_url());
        }
        if($query['pilihan']!=null){
            $this->session->setFlashdata('message', 'Anda Sudah Memilih');
            return redirect()->to(base_url());
        }
        if (session()->get('nis')) {
            return redirect()->to('/pemilih');
        }
        session()->set('nis', $data);
        return redirect()->to('/pemilih');
    }
    public function pilih()
    {
        $pemilih = new ModelPemilih();
        $data=$this->request->getPost('pil');
        $query = $pemilih->set('pilihan',$data)->where('nis',session()->get('nis'))->update();
        if ($query) {
            $this->session->setFlashdata('berhasil', 'Data Sudah tersimpan');
            return redirect()->to(base_url());
        }
    }
}
