<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;
use App\Controllers\BaseController;

class SuratKeluar extends BaseController
{

    protected $SuratKeluarModel;
    public function __construct()
    {
        $this->SuratKeluarModel = new SuratKeluarModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Fakultas Universitas Mulawarman',
            'top_header' => 'Surat',
            'header' => 'Surat Keluar',
            'surat_keluar' => $this->SuratKeluarModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
        ];
        return view('surat_keluar/index', $data);
    }
    public function viewData()
    {

        $request = \Config\Services::request();

        if ($request->isAJAX()) {
            $data = [
                'surat_keluar' => $this->SuratKeluarModel->orderBy('nomor', 'ASC')->get()->getResultArray(),
                'validation' => \Config\Services::validation(),
            ];
            $msg = [
                'data' => view('surat_keluar/view-data', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Data Tidak Dapat diproses');
        }
    }
}
