<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GajiPokok extends Model
{
    protected $table = "gaji_pokok";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'gaji_pokok'
    ];

    public function pegawai() {
        return $this->hasMany(Pegawai::class);
    }
}
