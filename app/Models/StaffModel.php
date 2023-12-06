<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id_staff';
    protected $allowedFields = ['nama', 'foto', 'level', 'email', 'password'];

    public function galeriFoto()
    {
        return $this->hasMany(GaleriFotoModel::class, 'id_staff', 'id_staff');
    }

    public function galeriVideo()
    {
        return $this->hasMany(GaleriVideoModel::class, 'id_staff', 'id_staff');
    }

    public function produk()
    {
        return $this->hasMany(ProdukModel::class, 'id_staff', 'id_staff');
    }
}
