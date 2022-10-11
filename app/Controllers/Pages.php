<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - Sistem Administrasi',
            'top_header' => 'Beranda',
            'header' => '',
        ];
        return view('pages', $data);
    }
}
