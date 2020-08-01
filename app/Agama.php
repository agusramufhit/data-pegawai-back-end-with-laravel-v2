<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = "agama";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'agama'
    ];

    public function pegawai() {
        return $this->hasMany(Pegawai::class);
    }
}
