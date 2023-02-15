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
            'belum' => $pemilih->table('pemilih')->where('pilihan IS NULL')->countAllResults(),
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
    public function hapus($id)
    {
        // dd($id);
        $pemilih = new ModelPemilih();
        $pemilih->where('id_pemilih', $id)->delete();
        $this->session->setflashdata('berhasil', 'Data berhasil terhapus');
        return redirect()->to(base_url('/admin/datapemilih'));
    }
    public function edit()
    {
        $pemilih = new ModelPemilih();
        $id_pemilih = $this->request->getPost('id');
        $nis = $this->request->getPost('nis');
        $nama = $this->request->getPost('nama');
        $kelas = $this->request->getPost('kelas');
        $data=[
            'nis'=>$nis,
            'nama'=>$nama,
            'kelas'=>$kelas,
        ];
        // dd($data);
        $pemilih->set($data)->where('id_pemilih', $id_pemilih)->update();
        $this->session->setflashdata('berhasil', 'Data berhasil berubah');
        return redirect()->to(base_url('/admin/datapemilih'));
    }
    public function hasil()
    {
        $pemilih = new ModelPemilih();
        $data=[

            'jumlahPemilih' => $pemilih->table('pemilih')->countAllResults(),
            'sudah' => $pemilih->table('pemilih')->where('pilihan IS NOT NULL')->countAllResults(),
            'pil1' => $pemilih->table('pemilih')->where('pilihan', 1)->countAllResults(),
            'pil2' => $pemilih->table('pemilih')->where('pilihan', 2)->countAllResults(),
        ];
        return view('hasil',$data);
    }
}
//222310288