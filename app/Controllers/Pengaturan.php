<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengaturanModel;

class Pengaturan extends BaseController
{
    private $pengaturan;

    public function __construct()
    {
        $this->pengaturan = new PengaturanModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Pengaturan',
            'pengaturan' => $this->pengaturan->first()
        ];
        if ($this->request->getMethod() == 'post') {
            $this->_simpanPengaturan($_POST);
            return redirect()->to('pengaturan')->with('pesan', 'Pengaturan berhasil disimpan');
        }
        echo view('pengaturan', $data);
    }

    private function _simpanPengaturan($post)
    {
        $data = [
            'nama_toko' => filter_var($post['nama_toko'], FILTER_SANITIZE_SPECIAL_CHARS),
            'no_telp'   => filter_var($post['no_telp'], FILTER_SANITIZE_SPECIAL_CHARS),
            'alamat'    => filter_var($post['alamat'], FILTER_SANITIZE_SPECIAL_CHARS),
        ];
<<<<<<< HEAD
        $this->pengaturan->update(0, $data);
=======
        $this->pengaturan->update(1, $data);
>>>>>>> 78080d95a381764113e8bdbbb683635f306c9000
    }
}
