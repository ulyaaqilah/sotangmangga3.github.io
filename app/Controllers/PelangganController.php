<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class PelangganController extends BaseController
{
    public function pelanggan()
    {
        $model = new PelangganModel();
        $data['pelanggan'] = $model->findAll();
        return view('/admin/pelangganmanajemen', $data);
    }

    public function pelanggantambah()
    {
        return view('/admin/pelanggantambah');
    }

    public function pelanggantambahstore()
    {
        $model = new PelangganModel();

        // Handle the file upload
        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('public/pelanggan/img', $newName);
        }

        $model->save([
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'foto' => $newName, 
            'role' => 'pelanggan',
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'password' => password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/admin/pelanggan');
    }

    public function pelangganedit($id)
    {
        $model = new PelangganModel();
        $data['pelanggan'] = $model->find($id);
        return view('/admin/pelangganedit', $data);
    }

    public function pelangganeditstore()
    {
        // Ambil data dari formulir
        $id_pelanggan = $this->request->getPost('id_pelanggan');
        $nama_pelanggan = $this->request->getPost('nama_pelanggan');
        $alamat = $this->request->getPost('alamat');
        $nomor_telepon = $this->request->getPost('nomor_telepon');
        $email = $this->request->getPost('email');
        $password = password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT);

        // Cek apakah ada file yang diunggah
        $file = $this->request->getFile('foto');

        if ($file->isValid() && !$file->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadDir = 'public/pelanggan/img';

            // Handle the file upload
            $newName = $file->getRandomName();
            $file->move($uploadDir, $newName);

            // Simpan data ke dalam database (gunakan model atau DB)
            $model = new pelangganModel();
            $model->update($id_pelanggan, [
                'nama_pelanggan' => $nama_pelanggan,
                'foto' => $newName,
                'role' => 'pelanggan',
                'alamat' => $alamat,
                'nomor_telepon' => $nomor_telepon,
                'email' => $email,
                'password' => $password,
                // ... (tambahkan kolom lainnya)
            ]);
        } else {
            // Jika tidak ada file yang diunggah, hanya update data tanpa mengubah foto
            $model = new pelangganModel();
            $model->update($id_pelanggan, [
                'nama_pelanggan' => $nama_pelanggan,
                'alamat' => $alamat,
                'role' => 'pelanggan',
                'nomor_telepon' => $nomor_telepon,
                'email' => $email,
                'password' => $password,
                // ... (tambahkan kolom lainnya)
            ]);
        }

        // Redirect kembali ke halaman pelanggan setelah mengedit
        return redirect()->to('/admin/pelanggan');
    }

    public function pelanggandestroy($id)
    {
        $model = new PelangganModel();   
        $model->delete($id);
        return redirect()->to('/admin/pelanggan');
    }
}
