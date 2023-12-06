<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\TestimoniModel;

class Home extends BaseController
{
    public function index()
    {
        // Mengambil data produk
        $produkModel = new ProdukModel();
        $data['produk'] = $produkModel->findAll();

        // Mengambil data testimoni
        $testimoniModel = new TestimoniModel();
        $data['testimoniData'] = $testimoniModel->select('testimoni.*, pelanggan.nama_pelanggan, pelanggan.email, pelanggan.foto')
            ->join('pelanggan', 'pelanggan.id_pelanggan = testimoni.id_pelanggan')
            ->findAll();

        return view('index', $data);
    }
}
