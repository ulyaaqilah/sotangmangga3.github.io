<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    protected $allowedFields = ['nama_pelanggan', 'foto', 'role', 'alamat', 'nomor_telepon', 'email', 'password'];

    public function testimoni()
    {
        return $this->hasMany(TestimoniModel::class, 'id_pelanggan', 'id_pelanggan');
    }
}
