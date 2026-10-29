<?php

namespace App\Controllers;

use App\Models\komikModel;

class komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {

        $this->komikModel = new komikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        //$komikModel = new \App\Models\komikmodel();

        return view('komik/index', $data);
    }
}
