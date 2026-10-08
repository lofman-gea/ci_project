<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index():string
    {
        return "Hallo, nama saya $this->nama";
    }
    public function About($nama = " ", $umur = 0)
    {
        echo "Hallo, nama saya $nama, saya berumur $umur tahun";
    }
}
