<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function biodata()
    {
        $data['title'] = "My Biodata";
        $data['nama'] = "Hikmah Maulana";
        $data['alamat'] = "Kp.Pasir Binong, Kragilan, Serang-Banten";
        $data['no_hp'] = "083813648878";

        return view('biodata', [
            'data' => $data
        ]);
    }

    public function galeri()
    {
        $data['title'] = "Galeri";

        return view('galeri', [
            'data' => $data
        ]);
    }

    public function kontak()
    {
        $data['title'] = "Kontak Person";

        return view('kontak', [
            'data' => $data
        ]);
    }
}
