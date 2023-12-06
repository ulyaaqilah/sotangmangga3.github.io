<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StaffModel;

class StaffController extends BaseController
{
    public function staff()
    {
        // Membuat instance dari model StaffModel
        $model = new StaffModel();

        // Mengambil data staff dari database
        $data['staff'] = $model->findAll();

        // Menampilkan view dengan membawa data staff
        return view('/admin/staffmanajemen', $data);
    }

    public function stafftambah()
    {
        return view('/admin/stafftambah');
    }

    public function staffedit($id)
    {
        // Membuat instance dari model StaffModel
        $model = new StaffModel();

        // Mengambil data staff berdasarkan ID
        $data['staff'] = $model->find($id);

        // Menampilkan view dengan membawa data staff
        return view('/admin/staffedit', $data);
    }


    public function staffeditstore()
    {
        // Ambil data dari formulir
        $id_staff = $this->request->getPost('id_staff');
        $nama = $this->request->getPost('nama');
        $level = $this->request->getPost('level');
        $email = $this->request->getPost('email');
        $password =password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT);    
        // Cek apakah ada file yang diunggah
        $file = $this->request->getFile('foto');
    
        if ($file->isValid() && !$file->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadDir = 'public/staff/img';
    
            // Handle the file upload
            $newName = $file->getRandomName();
            $file->move($uploadDir, $newName);
    
            // Simpan data ke dalam database (gunakan model atau DB)
            $model = new StaffModel();
            $model->update($id_staff, [
                'nama' => $nama,
                'foto' => $newName,
                'level' => $level,
                'email' => $email,
                'password' => $password, // Gunakan password yang sudah di-hash
                // ... (tambahkan kolom lainnya)
            ]);
        } else {
            // Jika tidak ada file yang diunggah, hanya update data tanpa mengubah foto
            $model = new StaffModel();
            $model->update($id_staff, [
                'nama' => $nama,
                'level' => $level,
                'email' => $email,
                'password' => $password, // Pertahankan nilai password jika tidak diisi
                // ... (tambahkan kolom lainnya)
            ]);
        }
    
        // Redirect kembali ke halaman staff setelah mengedit
        return redirect()->to('/admin/staff');
    }
    
    public function stafftambahstore()
    {
        $model = new StaffModel();

        // Handle the file upload
        $file = $this->request->getFile('foto');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('public/staff/img', $newName);
        }

        $model->save([
            'nama' => $this->request->getPost('nama'),
            'foto' => $newName, // Save the new name of the uploaded file
            'level' => $this->request->getPost('level'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/admin/staff');
    }

    public function staffdestroy($id)
    {
        // Membuat instance dari model StaffModel
        $model = new StaffModel();

        // Menghapus data staff berdasarkan ID
        $model->delete($id);

        // Redirect kembali ke halaman staff setelah menghapus
        return redirect()->to('/admin/staff');
    }
}
